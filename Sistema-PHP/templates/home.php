<?php
$page="Painel";
include("header.php");
?>
	<div id="cadastrar"><a href="index.php?acao=logout" title="Fazer logout!">Logout &raquo;</a></div>
	<div id="login" class="form bradius">
	<div class="message" style="<?php echo $display; ?>"></div>
	<div align="center" class="logo"><a href="<?php echo $home;?>" title="<?php echo $title;?>"><img src="imagens/logo.jpg" alt="<?php echo $title;?>" title="<?php echo $title;?>" width="195" height="195"/></a></div>
	<div class="acomodar">
		<?php if ($nivel==2) {
		?>
		
	<table width="100%" border="0">
		<tr align="center">
			<th>Nome</th>
			<th>Status</th>
			<th>Ação</th>
		</tr>
		<?php
		$cc=new DB;
		$cc=$cc->conectar();
		$sql="select * from usuarios where nivel=1";
		$buscarusuarios=mysqli_query($cc,$sql);
		if (mysqli_num_rows($buscarusuarios)==0) {
			echo "Nenhum usuário cadastrado no sistema!";
		}else{
			echo '<p align="center">Bem vindo administrador!</p>';
			while ($linha=mysqli_fetch_array($buscarusuarios)) {
				
			
	  	?>
	<tr align="center">
		<td><?php echo $linha["nome"];  ?></td>
		<td><?php echo $linha["status"];  ?></td>
		<td><?php $id=$linha["ID"]; if($linha["status"]==0) {echo "<a href='index.php?acao=aprovar&amp;id=$id'>Aprovar</a>"; }else{echo "<a href='index.php?acao=bloquear&amp;id=$id'>Bloquear</a>"; }  ?></td>
	</tr>
	<?php } } ?>
	</table>
	<?php }else{ 
		?>
	<p align="center">Seja bem vindo!</p>
<?php } ?>
<!-- div do acomodar -->
	</div>
<!-- div do login -->
	</div> 
</body>
</html>