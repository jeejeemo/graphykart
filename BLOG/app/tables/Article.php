<?php
/**
 * Created by PhpStorm.
 * User: jeanmo
 * Date: 26/02/2018
 * Time: 17:18
 */

namespace App\tables;

use App\App;
class Article
{
    public static function getLast(){
        return App::getDatabase()->query("
              SELECT articles.id, articles.titre, articles.texte, categories.titre AS categorie 
              FROM articles LEFT JOIN categories 
                ON category_id=categories.id ",
            __CLASS__);
    }
    public function __get($key)
    {
        $method ='get' .ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;

    }

    public function getUrl(){
        return 'index.php?p=article&id='.$this->id;
    }
    public function getExtrait(){
        $html = '<p>' . substr($this->texte, 0,150 ).'...</p>';
        $html.='<p><a href="'. $this->getUrl() .'">Voir la suite</a></p>';

        return $html;
    }

}