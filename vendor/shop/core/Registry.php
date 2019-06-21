<?php


namespace shop;


class Registry
{
 use TSingletone;

 protected static $properties = [];

    /**
     * @param $name
     * @return array
     */
    public static function getProperty($name) {
        if (isset(self::$properties[$name])){

        return self::$properties[$name];
    }
        return null;

    }

    /**
     * @param $name
     * @param $value
     */
    public static function setProperties($name , $value)
    {
        self::$properties[$name] = $value;
    }

    /**
     * @return array
     */
    public  function getProperties ()
    {
    return self::$properties;

    }

    public static function setProperty($name , $value)
    {
        self::$properties[$name] = $value;
    }

}