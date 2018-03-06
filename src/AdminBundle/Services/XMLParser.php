<?php
namespace AdminBundle\Services;
use XMLReader;

class XMLParser {

    public static function getTagsFromXml($filePath)
    {
        $reader = new XMLReader();
        $reader->open($_SERVER['DOCUMENT_ROOT'].'/web/files/'.$filePath, null, LIBXML_PARSEHUGE);
        $depth = 0;

        while($reader->read())
        {
            $break = false;
            if($reader->nodeType === $reader::ELEMENT)
            {
                $level = $reader->depth;

                if($depth > $level)
                {
                    $element = $reader->expand();
                    $break = true;
                    break;
                }

                $depth++;
            }

            if($break) break;
        }

        $reader->close();

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

    public static function importToDatabase($path, $fields)
    {

    }
}

