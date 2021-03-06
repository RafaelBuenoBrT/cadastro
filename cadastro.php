<?php

	require_once ('classes/Pessoa.php');
	require_once ('classes/PessoaDAO.php');
	require_once ('classes/Conexao.php');

	$pessoa = new PessoaDAO();

	//Pega o método post e envia como parametro para a classe Pessoa
	if(isset($_POST['enviarCadastro'])){

	    if($pessoa->queryInsert($_POST)){
	        echo ("<script>
				    window.alert('Pessoa cadastrada com sucesso!');
				    window.location.href='cadastro.php';
    		  </script>");
	    }else{
	        echo 'Pessoa não cadastrada';
	    }
   	}

   	/*
		Página de cadastro de pessoas com formulário e foreach para trazer 
		dados através do método select na classe Pessoa
   	*/
?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8" />
		<title>Formulario Cadastro</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<header>

			<?php include ("menu.php");?>

		</header>
		<main>
			<div class="conteudo">
				<h1>Cadastro</h1>
				<hr/>
				<!-- Formulario html, usando pattern para não tratar caracteres no php -->
				<form method="POST">
					<label>
						Nome: 
						<input type="text" name="nome" placeholder="Insira seu nome" pattern="[a-zA-Z0-9\s]+" required />
					</label> <br/><br/>

					<label>
						Telefone: 
						<input type="text" name="telefone" pattern="^\d{3}-\d{5}-\d{4}$" placeholder="041-66666-6666" required />
					</label><br/><br/>

					<label>
						Cpf: 
						<input type="text" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="999.999.999-99" required />
					</label><br/><br/>

					<label>
						Data de Nascimento: 
						<input type="date" name="datanascimento" required/>
					</label><br/><br/>

					<label>
						Sexo: 
						<input type="radio" name="sexo" value="M" checked> Masculino
						<input type="radio" name="sexo" value="F"> Feminino
					</label><br/><br/>

					<input type="submit" class="btn btn-outline-success" name="enviarCadastro" value="Cadastrar" />
				</form>
			</div>
			<div class="conteudo">
				<h1>Lista</h1>
				<hr/>
				<div class="col-md-12">
					<br/>
					<table class="table table-bordered">
						<td scope="col">Nome</td>
						<td scope="col">Telefone</td>
						<td scope="col">Cpf</td>
						<td scope="col">Data de Nascimento</td>
						<td scope="col">Sexo</td>
					
		    	<?php foreach($pessoa->querySelect() as $dados){ ?>

		    			<tr>
			        		<td><?=$dados['nome'];?></td>
			        		<td><?=$dados['telefone']?></td>
			        		<td><?=$dados['cpf']?></td>
			        		<td><?=$dados['datanascimento']?></td>
			        		<td><?=$dados['sexo']?></td>
		        		</tr>
		            <?php } ?>
		            </table>
				</div>
			</div>
		</main>
		<footer>
        	<p>Copyright © 2019 Rafael B. - Todos os direitos reservados</p>
    	</footer>
	</body>

</html>