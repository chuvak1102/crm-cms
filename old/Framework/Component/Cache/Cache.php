<?php
namespace Framework\Component\Cache;
use app\Config\Config;

class Cache
{
    static function createCache($component, $data)
    {
        switch ($component)
        {
            case 'routing' : {

                if(Config::CacheEnabled === false) return false;

                if(!file_exists(Routing::directory()))
                {
                    file_put_contents(Routing::directory(), Routing::transform($data));
                }

                break;
            }

            default : {

                return null;
            }
        }
    }

    static function loadFromCache($component)
    {
        switch ($component)
        {
            case 'routing' : {

                if(Config::CacheEnabled === false) return false;

                if(file_exists(Routing::directory()))
                {
                    require_once Routing::directory();
                    return $cache;
                }

                return null;
            }

            default : {
                return null;
            }
        }
    }
}