<?php
include "cabeTeste.php";
?>
<h1 class="ui horizontal divider header" id="tamCadastro">Cadastro Usuario</h1>


	<section class="margem">
		<form method="post" action="controlers/controler.php?acao=cadastrar">
			<div class="ui input tapa">
 				<input name='nome' type="text" placeholder="nome" required="">
			</div>
			<div class="ui input tapa1">
 				<input name='sobrenome' type="text" placeholder="sobrenome">
			</div>
			<div class="ui input tapa2">
 				<input name='email' type="email" placeholder="email" required="">
			</div>	
			<div class="ui input tapa3">
 				<input name='restricao' type="text" placeholder="Restrição Alimentar">
			</div>
			<div class="ui input tapa4">
 				<input name='senha' type="password" placeholder="Senha" required="">
			</div>
			
			<div class="tapa5">
				<input type="submit" class="ui button" value="Enviar">
			</div>
		</form>
	
	</section>
