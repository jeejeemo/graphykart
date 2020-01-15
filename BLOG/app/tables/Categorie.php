<?php
namespace App\tables;

use App\App;
class Categorie
{
    private static $table = "categories";
    public static function all(){


        return App::getDatabase()->query("SELECT*FROM ".self::$table."", __CLASS__);
    }
}