<?php
$home = "http://localhost/sistema-php/";
$title = "Página inicial";
$startaction="";
$msg="";
if (isset($_GET["acao"])) {
	$acao=$_GET["acao"];
	$startaction=1;
}
?>