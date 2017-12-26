<?php
class Cadastro{
	public function cadastrar($nome,$end,$email,$senha){
		//Tratamento das variáveis
		$nome=ucwords(strtolower($nome));
		$end=ucwords(strtolower($end));
		$senha=sha1($senha."MrSaw");
		//inserção no banco de dados
		$sql="insert INTO usuarios(nome,end,email,senha,nivel,status)VALUES('$nome','$end','$email','$senha',1,0)";
		$con=new DB;
		$con = $con->conectar();
		$sqlval="select * from usuarios where email='$email'";
		$validaremail=mysqli_query($con,$sqlval);
		$contar=mysqli_num_rows($validaremail);
		if ($contar==0) {
			$insert=mysqli_query($con,$sql);
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