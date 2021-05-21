<?php

class DB{
    static public function connect(){
        $db = new PDO("mysql:host=localhost;dbname=ecommerce-web-app","RajaeRs","ibtihal@RRR2001");
        $db->exec("set names utf8");
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        return $db;
    }
}


?>