<?php


namespace shop;


use mysql_xdevapi\Exception;

class Db
{
    use TSingletone;
    protected function __construct()
    {
        $db = require_once CONF.'/config_db.php';
        class_alias('\RedBeanPHP\R', '\R');
        \R::setup($db['dsn'], $db['user'], $db['password']);
        if(!\R::testConnection()){
            throw  new \Exception("No database connection ", 500);
        }
        \R::freeze(true);
        if (DEBUG){
            \R::debug(true, 1);
        }

    }


}