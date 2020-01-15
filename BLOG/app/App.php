<?php
/**
 * Created by PhpStorm.
 * User: jeanmo
 * Date: 27/02/2018
 * Time: 15:51
 */
namespace App;
class App{

    const DB_NAME = "blog";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_HOST = "localhost";
    private static $database;


    public static function getDatabase(){
        if (self::$database===null){
            self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }
        return self::$database;
    }
}