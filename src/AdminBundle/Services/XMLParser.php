<?php
namespace AdminBundle\Services;

class XMLParser {

    private $parser;
    private $tmpFile;
    private $tmpHandle;
    private $buffer;

    private $files = array();

    public function __construct($xml) {
        $this->parser = xml_parser_create('UTF-8');
        xml_set_object($this->parser, $this);
        xml_set_element_handler($this->parser, 'tag_start', 'tag_end');
        xml_set_character_data_handler($this->parser, 'cdata');
        $handle = fopen($xml, 'rb');
        while($string = fread($handle, 4096)) {
            xml_parse($this->parser, $string, false);
        }
        xml_parse($this->parser, '', true);
        fclose($handle);
        xml_parser_free($this->parser);
    }

    public function tag_start($parser, $tag, $attr) {
        if($tag == 'Object') {
            $this->tmpFile = tempnam(__DIR__, 'xml');
            $this->tmpHandle = fopen($this->tmpFile, 'wb');
        }
    }

    public function tag_end($parser, $tag) {
        if($this->tmpHandle) {
            if($this->buffer) {
                fwrite($this->tmpHandle, base64_decode($this->buffer));
                $this->buffer = '';
            }
            fclose($this->tmpHandle);
            $this->tmpHandle = null;
            $this->files[] = $this->tmpFile;
        }
    }

    public function cdata($parser, $data) {
        if ($this->tmpHandle) {
            $data = trim($data);
            if($this->buffer) {
                $data = $this->buffer . $data;
                $this->buffer = '';
            }
            if (0 != ($modulo = strlen($data)%4)) {
                $this->buffer = substr($data, -$modulo);
                $data = substr($data, 0, -$modulo);
            }
            fwrite($this->tmpHandle, base64_decode($data));
        }
    }

    public function getFiles(){
        return $this->files;
    }
}

