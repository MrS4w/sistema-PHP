<?php  
//Starts
ob_start();
session_start();
//Globais
include("globais.php");
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