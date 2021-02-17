<?php
namespace App\Tables;
use App\App;

class Table{

    protected static $table;

    

    public function __get($key)
    {
        $method = 'get' . ucfirst($key);

        $this->$key = $this->$method();
        return $this->$key;
    }
    

    public static function all()
    {


        return App::getDatabase()->query("SELECT*FROM " . static::$table . "", get_called_class());
    }

    public static function find($id)
    {
         
        return App::getDatabase()->prepare("SELECT*FROM " . static::$table . " WHERE id = ?",[$id], get_called_class(), true) ;
    }
    
    public static function query($statements,$attributes = null, $one = false)
    {
        if ($attributes) {
            return App::getDatabase()->prepare($statements, $attributes, get_called_class(), $one);

        } else {
            return App::getDatabase()->query($statements, get_called_class(), $one);
        }
        
    }
}