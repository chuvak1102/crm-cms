<?php
namespace Framework\Modules\FileUploader;

class FileUploader {

    protected $root;
    protected $maxsize = '50mb'; //(int) kb, gb, mb
    protected $allowed = array('rar','zip','doc','docx', 'xls','xlsx', 'csv', 'jpg', 'png', 'gif', 'jpeg', 'txt', 'pdf');
    protected $path = array(
        'rar' => 'files/',
        'zip' => 'files/',
        'doc' => 'files/',
        'docx' => 'files/',
        'xls' => 'files/',
        'xlsx' => 'files/',
        'csv' => 'files/',
        'txt' => 'files/',
        'pdf' => 'files/',
        'jpg' => 'files/',
        'png' => 'files/',
        'gif' => 'files/',
        'jpeg' => 'files/',
    );

    function __construct()
    {
        $this->root = $_SERVER['DOCUMENT_ROOT'].'/web/files/';
    }

    public function save($file){

        if(empty($file)) return 'no file';

        $goodName = $this->checkName($file);
        $goodType = $this->checkType($file);
        $goodSize = $this->checkSize($file);

        if($goodName && $goodSize && $goodType){

            return $this->persist($file);
        } else {

            if(!$goodName) $errors[] = 'Недопустимые символы в имени файла.';
            if(!$goodType) $errors[] = 'Данный тип файлов не поддерживается.';
            if(!$goodSize) $errors[] = 'Размер файла превышает максимальный.';

            return !empty($errors) ? $errors : 'Неизвестная ошибка, пожалуйста, обратитесь к разработчику.';
        }
    }

    public function check($file){
        $goodName = $this->checkName($file);
        $goodType = $this->checkType($file);
        $goodSize = $this->checkSize($file);

        if($goodName && $goodSize && $goodType){

            return $file;
        } else {

            return array(
                'name' => $goodName,
                'size' => $goodSize,
                'type' => $goodType
            );
        }
    }

    protected function checkName($file){

        $p = "[]{}<>~@#$%^`&*=|\"\'?\/\\№";
        $catch = substr_count($file['name'], $p);
        if($catch === 0){
            return true;
        } else {
            return false;
        }
    }

    public function checkType($file){

        $type3 = substr($file['name'], -3); // 3 chars extension
        $type4 = substr($file['name'], -4); // 4 chars extension

        if(array_key_exists($type3, $this->path)) return true;
        if(array_key_exists($type4, $this->path)) return true;

        return false;
    }

    public function checkSize($file){

        $integer = intval($this->maxsize);
        $dimension = preg_replace('/\d/','',$this->maxsize);

        switch ($dimension){
            case 'kb' : $zero = '000';
                break;
            case 'mb' : $zero = '000000';
                break;
            case 'gb' : $zero = '000000000';
                break;
            default   : $zero = '000000';
        }

        if($file['size'] < $integer.$zero){
            return true;
        } else {
            return false;
        }
    }

    public function getExtension($file){
        $pos = strpos($file['name'], '.');
        $type = substr($file['name'], ++$pos);
        return $type;
    }

    public function getName($file){
        $pos = strpos($file['name'], '.');
        $name = substr($file['name'], 0, $pos);
        return $name;
    }

    public function getPath($file){
        $pos = strpos($file['name'], '.');
        $type = substr($file['name'], ++$pos);
        return '';
    }

    public function generateName($file)
    {
        return md5(uniqid($this->getName($file)));
    }

    public function persist($file){

        $name = $this->generateName($file);
        $exe = $this->getExtension($file);
        $path = $this->getPath($file);
        $uploadedFile = $this->root.$path.$name.'.'.$exe;
        $dirExist = is_dir($this->root.$path);

        if($dirExist)
        {
            move_uploaded_file($file['tmp_name'], $uploadedFile);

            return $path.$name.'.'.$exe;
        } else {

            mkdir($this->root.$path, 0755);
            if(is_dir($this->root.$path)){
                move_uploaded_file($file['tmp_name'], $uploadedFile);

                return $name.'.'.$exe;
            } else {

                return array('can not create directory' => $path);
            }
        }
    }
}
