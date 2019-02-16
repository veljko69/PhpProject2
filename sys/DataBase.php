<?php


 final class DataBase
{
 private static  $db = null;

 public  static function getInstance(){
     if ( self::$db ===null){
         self::$db = new PDO('mysql:host='.Configuration::DB_HOST.';dbname='.Configuration::DB_BASE.'; charset=utf8',Configuration::DB_USER,Configuration::DB_PASS);
//         self::$db = new PDO('mysql:host=localhost;dbname=sajt','root','');
//      self::$db->setAtribute(PDO::ATTR_EMULATE_PREPARES,false)
     }
     return self::$db;
 }
}