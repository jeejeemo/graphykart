<?php
/**
 * Created by PhpStorm.
 * User: jeanmo
 * Date: 26/02/2018
 * Time: 17:18
 */

namespace App\Tables;

use App\App;
// use Table;

class Article extends Table
{

    protected static $table = 'articles';

    public static function getLast(){
        return self::query ("
              SELECT articles.id, articles.title, articles.content, category_name as categories FROM articles LEFT JOIN categories ON category_id = categories.id");
    }
    

    public function getUrl(){
        return 'index.php?p=article&id=' . $this->id;
    }
    
    public function getExtrait(){
        $html = '<p>' . substr($this->content, 0,150 ).'...</p>';
        $html.='<p><a href="'. $this->getUrl() .'">Voir la suite</a></p>';

        return $html;
    }

    public static function lastByCategory($category_id)
    {
        return self::query("
              SELECT articles.id, articles.title, articles.content, category_name as categories 
              FROM articles 
              LEFT JOIN categories 
                ON category_id = categories.id
                WHERE category_id = ?"
                ,[$category_id]);
    }

}