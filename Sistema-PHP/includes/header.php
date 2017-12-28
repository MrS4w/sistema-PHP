<?php  
//Starts
ob_start();
session_start();
//Globais
$home = "http://localhost/sistema-php/";
$title = "Página inicial";
$startaction="";
$msg="";
if (isset($_GET["acao"])) {
	$acao=$_GET["acao"];
	$startaction=1;
}
//include das classes
include("classes/DB.class.php");
include("classes/Cadastro.class.php");
include("classes/Login.class.php");
//conexão com banco de dados
$conectar= new DB;
$conectar=$conectar->conectar();

//Método de cadastro
include("controllers/cadastro.php");
//Métodos de login
include("controllers/login.php");
//Método de logout
include("controllers/logout.php");
//Método de checar usuario
include("controllers/check.php");
//Método de aprovar
include("controllers/aprovar.php");
//Método de bloquear
include("controllers/bloquear.php");
//Variáveis de estilo
include("controllers/style.php");
?>