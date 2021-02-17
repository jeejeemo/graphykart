<?php
/**
 * Created by PhpStorm.
 * User: jeanmo
 * Date: 22/02/2018
 * Time: 17:15
 */

class Text
{
    private static $suffix = " €";
    const SUFFIX = "$";
    
    
    public static function publicWithZero($chiffre)
    {
       return self::withZero($chiffre);
    }

    private static function withZero($chiffre){
        if($chiffre<10){
            return '0' .$chiffre .self::SUFFIX;
        }else{
            return $chiffre .self::SUFFIX ;
        }
    }
}