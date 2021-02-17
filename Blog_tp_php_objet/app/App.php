<?php
/**
 * Created by PhpStorm.
 * User: jeanmo
 * Date: 27/02/2018
 * Time: 15:51
 */
namespace App;
class App{

    const DB_NAME = "tutophp";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_HOST = "localhost";

    private static $title = 'Mon super site';
    private static $database;


    public static function getDatabase(){
        if (self::$database===null){
            self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }
        return self::$database;
    }

    public static function notFound()
    {
        header('HTTP/1.0 404 Not Fond');
        header('Location:index.php?p=404');
    }

    
    public static function getTitle()
    {
        return self::$title;
    }
    
    public static function setTitle($title)
    {
        self::$title = $title;
    }
}