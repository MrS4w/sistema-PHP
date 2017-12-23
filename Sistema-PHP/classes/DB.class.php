<?php
	class DB{
		public function conectar(){
			$host = "localhost";
			$user = "root";
			$pass = "";
			$dbname = "sistema";

			$conexao=mysqli_connect($host,$user,$pass,$dbname);
			$selectdb=mysqli_select_db($conexao,$dbname);
			return $conexao;
		}
	}
?>