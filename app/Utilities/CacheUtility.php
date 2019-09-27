<?php

namespace App\Utilities;

use Closure;

class CacheUtility
{    
    protected $cache_minutes = 60 * 24;

    public function remember($key, Closure $callback, $tag = 'default')
    {
        return cache()->tags($tag)->remember($key, $this->cache_minutes, function () use ($callback){
            $return = $callback();
            return is_null($return)?[]:$return;
        });
    }
}