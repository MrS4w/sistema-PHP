<?php  
//globais
$home = "http://localhost/sistema%20php";
$title = "Página inicial";
include("classes/DB.class.php");

//conexão com banco de dados
$conectar= new DB;
$conectar=$conectar->conectar();


?>