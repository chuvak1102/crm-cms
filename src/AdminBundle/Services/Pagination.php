<?php
namespace app\Services;

class Pagination{

    protected $count = 30;

    public function pageCount($objArray){
        return count($objArray);
    }

    public function pageUrl($object){
        
    }
}