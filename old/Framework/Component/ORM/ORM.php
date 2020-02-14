<?php
namespace Framework\Component\ORM;
//use app\Config\Config;
//use Framework\Component\Controller\Controller;
//use Framework\Component\ORM\Mapping;

class ORM{

    public function getManager(){
        return new EntityManager();
    }

    public function getRepository($entityName)
    {
        $repositoryName = Mapping::getEntityRepository(new $entityName);
        $repoPath = str_replace('\\', '/', $repositoryName);
        $repoFile = $_SERVER['DOCUMENT_ROOT'].'/src/'.$repoPath.'.php';

        if(file_exists($repoFile))
        {
            require_once $repoFile;
            $entityRepository = new $repositoryName($entityName);

            if($entityRepository instanceof Repository)
            {
                return $entityRepository;
            } else {

                throw new \Exception('ORM::getRepository: expects parameter 1 to ba an instance of Repository, '.$repositoryName.' given.');
            }

        } else {

            return new Repository($entityName);
        }

    }
}

