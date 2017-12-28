<?php
if ($startaction==1 && $acao=="logar") {
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

?>