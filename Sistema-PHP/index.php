<?php 
include("includes/header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
	<div id="cadastrar"><a href="cadastro.php" title="Cadastre-se e venha fazer parte de nossa equipe!">Cadastre-se &raquo;</a></div>
	<div id="login" class="form bradius">
	<div class="message" style="<?php echo $display; ?>"><?php echo $msg; ?></div>
	<div align="center" class="logo"><a href="<?php echo $home;?>" title="<?php echo $title;?>"><img src="imagens/logo.jpg" alt="<?php echo $title;?>" title="<?php echo $title;?>" width="195" height="195"/></a></div>
	<div class="acomodar">
	<form action="?acao=logar" method="post">
		<label for="email">E-mail:</label><input id="email" type="text" class="txt bradius" name="email" value="">
		<label for="senha">Senha:</label><input id="senha" type="password" class="txt bradius" name="senha" value="">
		<input type="submit" class="sb bradius" value="Entrar">
	</form>
<!-- div do acomodar -->
	</div>
<!-- div do login -->
	</div> 
</body>
</html>
