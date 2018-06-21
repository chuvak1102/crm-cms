<?php
namespace AdminBundle\Controller;

use AdminBundle\Entity\Category;
use AdminBundle\Entity\ContentType;
use AdminBundle\Entity\ImportFields;
use AdminBundle\Entity\ImportUpdate;
use Framework\Component\Controller\Controller;
use Framework\Component\HttpFoundation\Response;
use Framework\Modules\Authorization\Authorization;
use Framework\Component\HttpFoundation\Request;
use AdminBundle\Entity\Import;
use Framework\Modules\MySql\MySql;
use AdminBundle\Services\XMLParser;
use Framework\Modules\FileUploader\FileUploader;

/**
 * @Route("/admin/import")
 */
class ImportController extends Controller
{
    const MODE_INSERT = 1;
    const MODE_UPDATE = 2;
    const MODE_DROP_INSERT = 3;

    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        if(Authorization::isConfirmed() && $request->isXmlHttpRequest())
        {
            $iRepo = $this->getORM()->getRepository(Import::class);
            $cRepo = $this->getORM()->getRepository(ContentType::class);

            return $this->render('AdminBundle:import/index.twig', array(
                'import' => $iRepo->findAll(),
                'tables' => $cRepo->findAll()
            ));

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/new")
     */
    public function newAction(Request $request)
    {
        if(Authorization::isConfirmed() && $request->isXmlHttpRequest())
        {
            $import = new Import();
            $import->setName($request->get('name'));
            $import->setType($request->get('type'));
            $import->setSource($request->get('source'));
            $import->setTable($request->get('table'));
            $import->setModified(new \DateTime());

            $em = $this->getORM()->getManager();
            $em->persist($import);
            $em->flush();

            return $this->redirectToRoute('/admin/import/');

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/delete/{import}")
     */
    public function deleteAction(Request $request, Import $import)
    {
        if(Authorization::isConfirmed() && $request->isXmlHttpRequest())
        {
            $orm = $this->getORM();
            $em = $orm->getManager();
            $iRepo = $orm->getRepository(ImportFields::class);
            $uRepo = $orm->getRepository(ImportUpdate::class);
            $fields = $iRepo->findBy(array('import' => $import->getId()));
            $update = $uRepo->findBy(array('import' => $import->getId()));

            foreach($fields as $f){
                $em->remove($f);
            }

            foreach($update as $u){
                $em->remove($u);
            }

            $em->remove($import);
            $em->flush();


            return $this->redirectToRoute('/admin/import/');

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/begin/{import}")
     */
    public function beginAction(Request $request, Import $import)
    {
        if(Authorization::isConfirmed() && $request->isXmlHttpRequest())
        {
            return $this->render('AdminBundle:import/begin.twig', array(
                'set' => $import,
            ));

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/load/{import}")
     */
    public function loadFileAction(Request $request,Import $import)
    {
        $location = '';

        if(!empty($request->files['file']['tmp_name']))
        {
            $uploader = new FileUploader();
            $location = $uploader->save($request->files['file']);
        }

        if(!empty($request->get('url')))
        {
            $location = $request->get('url');
        }

        $em = $this->getORM()->getManager();
        $import->setLocation($location);
        $em->persist($import);
        $em->flush();

        return $this->redirectToRoute('/admin/import/setup/'.$import->getId());
    }

    /**
     * @Route("/setup/{import}")
     */
    public function setupAction(Request $request, MySql $mySql, Import $import)
    {
        if(Authorization::isConfirmed() && $request->isXmlHttpRequest())
        {
            $iRepo = $this->getORM()->getRepository(ImportFields::class);
            $parser = new XMLParser($import->getLocation());
            $tags = $parser->getTagsFromXml();

            return $this->render('AdminBundle:import/setup.twig', array(
                'tags' => $tags,
                'set' => $import,
                'columns' => $mySql->getColumnList($import->getTable()),
                'file' => $import->getLocation(),
                'saved' => $iRepo->findBy(array('import' => $import->getId()))
            ));

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/save/{import}")
     */
    public function completeSetupAction(Import $import, Request $request, MySql $mySql)
    {
        $repo = $this->getORM()->getRepository(ImportFields::class);
        $em = $this->getORM()->getManager();

        $exist = $repo->findBy(array(
            'import' => $import->getId()
        ));

        if($exist)
        {
            foreach($exist as $i)
            {
                $em->remove($i);
            }
        }

        $em->flush();

        foreach($request->post as $k => $v)
        {
            if(!empty($v))
            {
                $field = new ImportFields();
                $field->setImport($import->getId());
                $field->setKey($k);
                $field->setColumn($v);
                $em->persist($field);
            }
        }

        $em->flush();

        return $this->redirectToRoute('/admin/import/');
    }

    private function parseAll(Import $import, $mode = self::MODE_INSERT)
    {
        $mySql = $this->getMysql();
        $orm = $this->getORM();
        $parser = new XMLParser($import->getLocation());
        $rootTag = $parser->getRootElementName();
        $reader = $parser->getReader();
        $iRepo = $orm->getRepository(ImportFields::class);
        $cRepo = $orm->getRepository(Category::class);
        $uRepo = $orm->getRepository(ImportUpdate::class);
        $fields = $iRepo->findBy(array('import' => $import->getId()));
        $updates = $uRepo->findBy(array('import' => $import->getId()));
        $ctype = $cRepo->findOneBy(array('alias' => $import->getTable()));
        $insertArray = array();
        $updateFilters = array();
        $table = $import->getTable();

        foreach($fields as $i)
        {
            $insertArray[$i->getKey()] = $i->getColumn();
        }

        if($updates)
        {
            foreach($updates as $u)
            {
                $updateFilters[] = $u->getField();
            }
        }

        $totalInserts = 0;
        $totalUpdates = 0;
        $totalDeletes = 0;

        $start = new \DateTime();

        while($reader->read())
        {
            if($reader->nodeType === $reader::ELEMENT)
            {
                if ($reader->localName == $rootTag)
                {
                    if($mode == self::MODE_UPDATE)
                    {
                        $statement = array();
                        foreach($updateFilters as $u)
                        {
                            $statement[$u] = $reader->getAttribute($insertArray[$u]);
                        }

                        $found = $mySql->findBy($table, $statement);

                        if(isset($found) && $found)
                        {
                            $mySql->update($table, $statement, $ctype->getId());
                            $totalUpdates += count($found);

                        } else {

                            $statement = array(
                                'category' => $ctype->getId()
                            );
                            foreach($insertArray as $k => $v)
                            {
                                $statement[$k] = $reader->getAttribute($v);
                            }
                            $mySql->insert($table, $statement);
                            $totalInserts++;
                        }
                    }

                    if($mode == self::MODE_INSERT)
                    {
                        $statement = array(
                            'category' => $ctype->getId()
                        );
                        foreach($insertArray as $k => $v)
                        {
                            $statement[$k] = $reader->getAttribute($v);
                        }
                        $mySql->insert($table, $statement);
                        $totalInserts++;
                    }
                }
            }
        }

        $reader->close();

        $end = new \DateTime();

        $speed = $end->diff($start);
        $h = $speed->format('%h');
        $m = $speed->format('%i');
        $s = $speed->format('%s');

        return array(
            'inserts' => $totalInserts,
            'removed' => 0,
            'updated' => $totalUpdates,
            'execution_time' => $h.' час. '.$m.' мин. '.$s.' сек.'
        );
    }

    /**
     * @Route("/import_execute_add/{import}")
     */
    public function importAllAction(Import $import)
    {
        $result = $this->parseAll($import, self::MODE_INSERT);

        $em = $this->getORM()->getManager();
        $import->setModified(new \DateTime());
        $em->persist($import);
        $em->flush();

        return $this->render('AdminBundle:import/report.twig', array(
            'inserts' => $result['inserts'],
            'removed' => $result['removed'],
            'updated' => $result['updated'],
            'execution_time' => $result['execution_time']
        ));
    }

    /**
     * @Route("/import_execute_drop_add/{import}")
     */
    public function dropAndImportAction(Import $import, MySql $mySql)
    {
        $deleted = $mySql->getRowsCount($import->getTable());

        $mySql->truncate($import->getTable());

        $result = $this->parseAll($import, self::MODE_INSERT);

        $em = $this->getORM()->getManager();
        $import->setModified(new \DateTime());
        $em->persist($import);
        $em->flush();

        return $this->render('AdminBundle:import/report.twig', array(
            'inserts' => $result['inserts'],
            'removed' => $deleted,
            'updated' => $result['updated'],
            'execution_time' => $result['execution_time']
        ));

    }

    /**
     * @Route("/import_update_setup/{import}")
     */
    public function importUpdateSetupAction(Import $import, MySql $mySql)
    {
        $iRepo = $this->getORM()->getRepository(ImportUpdate::class);

        return $this->render('AdminBundle:import/setup_update.twig', array(
            'import' => $import,
            'columns' => $mySql->getColumnList($import->getTable()),
            'filter' => $iRepo->findBy(array('import' => $import->getId()))
        ));
    }

    /**
     * @Route("/import_execute_update/{import}")
     */
    public function importExecuteUpdateAction(Import $import, Request $request)
    {
        $em = $this->getORM()->getManager();
        $iRepo = $this->getORM()->getRepository(ImportUpdate::class);
        $filters = $iRepo->findBy(array('import' => $import->getId()));

        if($filters)
        {
            foreach($filters as $i)
            {
                $em->remove($i);
                $em->flush();
            }
        }

        foreach($request->get('filter') as $f)
        {
            if($f)
            {
                $filter = new ImportUpdate();
                $filter->setImport($import->getId());
                $filter->setField($f);
                $em->persist($filter);
                $em->flush();
            }
        }

        $filters = $iRepo->findBy(array('import' => $import->getId()));

        if($filters)
        {
            $result = $this->parseAll($import, self::MODE_UPDATE);

            $em = $this->getORM()->getManager();
            $import->setModified(new \DateTime());
            $em->persist($import);
            $em->flush();

            return $this->render('AdminBundle:import/report.twig', array(
                'inserts' => $result['inserts'],
                'removed' => $result['removed'],
                'updated' => $result['updated'],
                'execution_time' => $result['execution_time']
            ));

        } else {

            return $this->render('AdminBundle:import/error.twig', array(
                'text' => 'Укажите хотя бы одно уникальное поле',
            ));
        }


    }

}


























