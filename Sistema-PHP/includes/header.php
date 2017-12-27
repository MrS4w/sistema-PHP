<?php  
//Starts
ob_start();
session_start();



//globais
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

//método de cadastro
if ($startaction==1) {
	if ($acao=="cadastrar") {
		$nome=$_POST["nome"];
		$end=$_POST["end"];
		$email=$_POST["email"];
		$senha=$_POST["senha"];

		if (empty($nome) || empty($end) || empty($email) || empty($senha)) {
			$msg="Preencha todos os campos!";
		}
		//todos os campos preenchidos
		else{
			//email válido
			if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
				//Senha inválida
			if (strlen($senha)<8) {
					$msg="Digite sua senha com no mínimo 8 digitos!";
				}
				//Senha válida
				else{
					//executa a classe de cadastro
					$conectar=new Cadastro;
					echo '<div class="flash">';
					$conectar=$conectar->cadastrar($nome,$end,$email,$senha);
					echo '</div>';
				}
			}
			//email inválido
			else{
				$msg="Digite seu e-mail corretamente!";
			}
		}
	}
}
//métodos de login
if ($startaction==1) {
	if ($acao=="logar") {
		//Dados
		$email=$_POST["email"];
		$senha=sha1($_POST["senha"]."MrSaw");

		if (empty($email)||empty($senha)) {
			$msg="Preencha todos os campos!";
		}else{
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$msg="Digite seu email corretamente!";
			}else{
				//Executa a busca elo usuario
				$login=new Login;
				echo '<div class="flash">';
				$login=$login->logar($email,$senha);
				echo '</div>';
			}
		}
	}
}
//Método de logout
if ($startaction==1) {
	if ($acao=="logout") {
		setcookie("logado","");
		unset($_SESSION["email"],$_SESSION["senha"],$_SESSION["nivel"]);
		}
	}


//método de checar usuario
if (isset($_SESSION["email"])&&isset($_SESSION["senha"])) {
 	$logado=1;
 	$nivel=$_SESSION["nivel"];
 } 

//Variáveis de estilo
if (empty($msg)) {
	$display="display:none;";
}else{
	$display="display:block;";
}
?>