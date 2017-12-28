<?php
if ($startaction==1 && $acao=="bloquear") {
		if($nivel==2){
			if (isset($_GET["id"])) {
				$id=$_GET["id"];
				$sql="update usuarios set status=0 where id='$id'";
				$query=mysqli_query($conectar,$sql);
		}
	}
}
?>