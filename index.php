<?php
require_once 'Configuration.php';
require_once 'sys/Controller.php';
require_once 'sys/DataBase.php';
require_once 'sys/ModelInterface.php';
#samo sada rucno

require_once'app/models/MessageModel.php';
require_once'app/models/ProductModel.php';

#DISPECER

if (!isset($_GET['Controller']) or !preg_match('/^([A-Z][a-z]+)+$/', $_GET['Controller']) or !$_GET['Controller']){
    $_GET['Controller']='Products';
}
if(!isset($_GET['Method']) or !preg_match('/^[a-z]+([A-Z][a-z]*)*$/', $_GET['Method']) or !$_GET['Method']){
    $_GET['Method']='index';
}
$controllerPath ='app/controllers/'.$_GET['Controller'].'Controller.php';
if(!file_exists($controllerPath)){
    die('Controller class does not exist');
}
#UKLJUCIVANJ KODA IZABRANE KLASE

require_once $controllerPath;

$imeKlase = $_GET['Controller'].'Controller';
$worker = new $imeKlase;
if(!method_exists($worker, $_GET['Method'])){
    die('This controller does not have requsted metod');
}
#IZVRSAVANJE IZABRANOG METODA IZABRANE KLSE

$worker->{$_GET['Method']}();

#PREUZIMANJE PODATAKA

$DATA = $worker->getData();

#UCITAVANJE SABLONA ZA TAJ METOD

require'app/views/'.$_GET['Controller'].'/'.$_GET['Method'].'.php';