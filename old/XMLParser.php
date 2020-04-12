<?php
namespace AdminBundle\Services;
use XMLReader;

class XMLParser {

    protected $source;
    protected $reader;

    function __construct($source)
    {
        if(preg_match('%^((https?://)|(www\.))([a-z0-9-].?)+(:[0-9]+)?(/.*)?$%i', $source))
        {
            $this->source = $source;
        } else {
            $this->source = $_SERVER['DOCUMENT_ROOT'].'/web/files/'.$source;
        }

        $this->reader = new XMLReader();
        $this->reader->open($this->source, null, LIBXML_PARSEHUGE);
    }

    private function getSingleRecord()
    {
        $depth = 0;
        while($this->reader->read())
        {
            $break = false;
            if($this->reader->nodeType === $this->reader::ELEMENT)
            {
                $level = $this->reader->depth;

                if($depth > $level)
                {
                    $element = $this->reader->expand();
                    $break = true;
                    break;
                }

                $depth++;
            }

            if($break) break;
        }

        if(empty($element)) return null;

        return $element;
    }

    public function getRootElementName()
    {
        $element = $this->getSingleRecord();

        if(empty($element)) return null;

        return $element->localName;
    }

    public function getTagsFromXml()
    {
        $element = $this->getSingleRecord();

        if(empty($element)) return null;

        $foundTags = $element->attributes;

        $tags = array();

        for($i = 0; $i < $foundTags->length; $i++)
        {
            $tags[$foundTags->item($i)->name] = $foundTags->item($i)->nodeValue;
        }

        if(empty($tags)) return null;

        return $tags;
    }

    public function getReader()
    {
        $this->reader->close();
        $this->reader = new XMLReader();
        $this->reader->open($this->source, null, LIBXML_PARSEHUGE);

        return $this->reader;
    }

}

