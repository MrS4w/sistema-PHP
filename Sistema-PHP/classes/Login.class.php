<?php
	class Login{
		public function logar($email,$senha){
			$connect=new DB();
			$connect=$connect->conectar();
			
			$sql="select * from usuarios where email='$email' and senha='$senha' and status=1 limit 1;";
			$sqls="select * from usuarios where email='$email' and senha='$senha' and status=0 limit 1;";
			$buscar=mysqli_query($connect,$sql);
			$buscar2=mysqli_query($connect,$sqls);

			$result=mysqli_num_rows($buscar);
			$result2=mysqli_num_rows($buscar2);
			if ($result==1) {
				$log=1;
				$dados=mysqli_fetch_array($buscar);
				$_SESSION["email"]=$dados["email"];
				$_SESSION["senha"]=$dados["senha"];
				$_SESSION["nivel"]=$dados["nivel"];
				setcookie("logado",1);
				
			}
			
			if (isset($log)) {
				$flash="Logado com sucesso!";
			}
			else{
				if($result2==1) {
					$flash="Login ainda não aprovado por nossa administração!";
				}
				else{
				$flash="Verifique se as informações inseridas estão corretas!";
				}
			}
			echo " $flash";
		}
	}
?>