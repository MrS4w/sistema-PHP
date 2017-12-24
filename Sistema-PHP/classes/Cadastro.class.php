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

		$insert=mysqli_query($conexao,$sql);
		if (isset($insert)) {
			$flash="Cadastro realizado com sucesso, aguarde a nossa aprovação!";
		}else{
			$flash="Ops! Houve algum erro em nosso sistema, contate o administrador!";
		}
		//retorno para o usuário
		echo $flash;
	}
}
?>