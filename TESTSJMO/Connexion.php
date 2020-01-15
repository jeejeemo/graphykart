<?php
/**
 * Created by PhpStorm.
 * User: jeanmo
 * Date: 27/02/2018
 * Time: 17:38
 */
$pdo = new PDO('mysql:host=localhost;dbname=blog',  "root", "");
$statement = $pdo->prepare('SELECT * FROM articles');
$statement->execute();
$result = $statement->fetch();
var_dump($result);

//foreach ($result as $results){
//    echo $result['titre']. "<br>";
//    echo substr($result['texte'], 0, 100)."<br>" ;
//}

