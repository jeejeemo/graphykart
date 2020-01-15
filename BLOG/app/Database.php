<?php
/**
 * Created by PhpStorm.
 * User: jeanmo
 * Date: 26/02/2018
 * Time: 09:38
 */

namespace App;

use \PDO;

class Database
{
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_user='root', $db_pass ="", $db_host='localhost')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    private function getPDO(){
        if($this->pdo===null){
        $pdo = new PDO('mysql:host=localhost;dbname=blog',  "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $this->pdo=$pdo;
        }

        return $this->pdo;

    }

    public function query($status, $class_name){
        $req = $this->getPDO()->query($status);
        $datas = $req->fetchAll(PDO::FETCH_CLASS, $class_name);

        return $datas;
    }
    public function prepare($status,$attributes, $class_name, $one=false){
        $req = $this->getPDO()->prepare($status);
        $req->execute($attributes);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if($one){
            $datas = $req->fetch();
        }else{
        $datas = $req->fetch();
        }
        return $datas;

    }
}