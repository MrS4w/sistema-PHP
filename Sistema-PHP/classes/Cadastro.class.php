<?php
class Cadastro{
	public function cadastrar($nome,$end,$email,$senha){
		//Tratamento das variáveis
		$nome=ucwords(strtolower($nome));
		$end=ucwords(strtolower($end));
		$senha=sha1($senha."MrSaw");
		//inserção no banco de dados
		$sql="insert INTO usuarios(nome,end,email,senha,nivel,status)VALUES('$nome','$end','$email','$senha',1,0)";
		$host = "localhost";
		$user = "root";
		$pass = "";
		$dbname = "sistema";
		$conexao=mysqli_connect($host,$user,$pass,$dbname);
		$sqlval="select * from usuarios where email='$email'";

		$validaremail=mysqli_query($conexao,$sqlval);
		$contar=mysqli_num_rows($validaremail);
		if ($contar==0) {
			$insert=mysqli_query($conexao,$sql);
		}else{
			$flash="Já existe um usuário cadastrado com esse e-mail!";
		}
		if (isset($insert)) {
			$flash="Cadastro realizado com sucesso, aguarde a nossa aprovação!";
		}else{
			if (empty($flash)) {
			$flash="Ops! Houve algum erro em nosso sistema, contate o administrador!";
		}
	}

		//retorno para o usuário
		echo $flash;
	}
}
?>