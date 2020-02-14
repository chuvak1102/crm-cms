<?php
namespace Framework\Component\Cache;
use app\Config\Config;

class Routing implements CacheInterface
{
    static function directory()
    {
        return $_SERVER['DOCUMENT_ROOT'].'/app/cache/routing_'.Config::SecretApplicationKey;
    }

    static function transform($data)
    {
        return '<?php $cache = '.var_export(($data), true).'; ?>';
    }
}