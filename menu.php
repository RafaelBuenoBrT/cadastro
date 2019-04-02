<?php

	/*
		Documento responsável pelo menu 
		bootstrap em todas páginas
	*/


?>

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="index.php">
		  	<img src="imagens/logo.png" width="80" height="50"  alt="logo"> SysCadastro</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <div class="navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
				  <a class="nav-item nav-link" href="./index.php">Home</a>
				  <a class="nav-item nav-link" href="./cadastro.php">Cadastrar</a>
				  <a class="nav-item nav-link" href="./editar.php">Editar</a>
				  <a class="nav-item nav-link" href="./excluir.php">Excluir</a>
				</div>
			  </div>
		    <form class="form-inline my-2 my-lg-0" method="POST" action="resultados.php">
		      <input class="form-control mr-sm-2" type="text" placeholder="Procure por nome" aria-label="Search" name="buscar">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
		    </form>
		  </div>
		</nav>
