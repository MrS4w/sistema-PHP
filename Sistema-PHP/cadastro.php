<?php 
include("includes/header.php");
if (isset($logado)) {
	include("templates/home.php");
}else{
	include("templates/index.php");
}
?>
<?php 
include("includes/header.php");
if (isset($logado)) {
	include("templates/home.php");
}else{
	include("templates/cadastro.php");
}
?>
