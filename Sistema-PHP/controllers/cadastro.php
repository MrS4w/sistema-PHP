<?php
if ($startaction==1 && $acao=="cadastrar") {
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
?>