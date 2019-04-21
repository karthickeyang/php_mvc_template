<?php

namespace  App\Core;

class App {

    protected static $registery =[
        // 'config' => [],
        // 'database' => $queryBuilder
    ];

    public static function bind($key, $value){
        static::$registery[$key] = $value; 
    }

    public static function get($key){
        
        if(! array_key_exists($key, static::$registery)){
            throw new Exception("No $key found in container");
        }

        return static::$registery[$key];
    }

}