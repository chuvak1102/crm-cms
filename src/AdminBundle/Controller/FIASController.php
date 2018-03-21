<?php
namespace AdminBundle\Controller;

use AdminBundle\Services\Helpers;
use Framework\Component\HttpFoundation\JsonResponse;
use Framework\Component\HttpFoundation\Request;
use AdminBundle\Entity\Log;
use Framework\Component\Controller\Controller;
use Framework\Modules\Authorization\Authorization;
use Framework\Modules\MySql\MySql;

/**
 * @Route("/admin/fias")
 */
class FIASController extends Controller
{
    function getParentCity($city)
    {
        $mysql = new MySql();
        $parent = $city['Parent'];
        if(!$parent) return null;

        $i = true;
        while($i === true)
        {
            $res = $mysql->findOneBy('addrobj', array(
                'AOGUID' => $parent
            ));

            if(!$res) $i = false;

            if($res['PARENTGUID']){
                $parent = $res['PARENTGUID'];
            } else {
                break;
            }
        }

        if(empty($res)) return null;

        return $res;
    }

    /**
     * @Route("/city")
     */
    public function cityAction(MySql $mySql, Request $request)
    {
        if(Authorization::isConfirmed())
        {
            $query = urldecode($request->get('query'));
            $query = Helpers::sqlSanitize($query);

            if(strlen(Helpers::transliterize($query)) >= 3)
            {
                $cities = $mySql->call('fias_get_city', array(
                    $query
                ));

                if(!empty($cities))
                {
                    foreach($cities as $city)
                    {
                        $r = $this->getParentCity($city);
                        $result[] = array(
                            'Name' => $city['Name'].' '.$city['ShortName'].' '.$r['FORMALNAME'].' '.$r['SHORTNAME'],
                            'Code' => $city['Code'],
                        );
                    }
                }

            } else {

                $result = array();

            }

            if(isset($result))
            {
                return new JsonResponse($result);

            } else {

                return new JsonResponse(array());
            }

        } else {

            return $this->redirectToRoute('/admin/login/');
        }
    }

    /**
     * @Route("/street")
     */
    public function streetAction(MySql $mySql, Request $request)
    {
        $city = $request->get('code');
        $street = urldecode($request->get('query'));
        $city = Helpers::sqlSanitize($city);
        $street = Helpers::sqlSanitize($street);
        
        $streets = $mySql->call('fias_get_street', array(
            $city, $street
        ));

        if($streets)
        {
            foreach($streets as $s)
            {
                $result[] = array(
                    'Name' => $s['Name'].' '.$s['ShortName'],
                    'Code' => $s['Code']
                );
            }

        } else {

            return new JsonResponse(array());
        }

        return new JsonResponse($result);
    }

    /**
     * @Route("/house")
     */
    public function houseAction(MySql $mySql, Request $request)
    {
        $street = $request->get('code');
        $house = urldecode($request->get('query'));
        $street = Helpers::sqlSanitize($street);
        $house = Helpers::sqlSanitize($house);

        $houses = $mySql->call('fias_get_house', array(
            $street, $house
        ));

        if($houses)
        {
            foreach($houses as $h)
            {
                $name = '';
                if(!empty($h['Build'])) $name = $name.'к'.$h['Build'];
                if(!empty($h['Str']))  $name = $name.'стр'.$h['Str'];

                $result[] = array(
                    'Name' => $h['Name'].$name,
                    'Code' => $h['Code']
                );
            }

            return new JsonResponse($result);

        } else {

            return new JsonResponse(array());
        }
    }

    /**
     * @Route("/room")
     */
    public function roomAction(MySql $mySql, Request $request)
    {
        $house = $request->get('code');
        $room = urldecode($request->get('query'));
        $house = Helpers::sqlSanitize($house);
        $room = Helpers::sqlSanitize($room);
        $rooms = $mySql->call('fias_get_room', array(
            $house, $room
        ));

        if($rooms)
        {
            foreach($rooms as $r)
            {
                $result[] = array(
                    'Name' => $r['Name'],
                    'Code' => $r['Code']
                );
            }

            return new JsonResponse($result);

        } else {

            return new JsonResponse(array());
        }
    }


}