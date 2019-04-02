<?php

	require_once ('classes/Pessoa.php');
	require_once ('classes/PessoaDAO.php');
	require_once ('classes/Conexao.php');

	$pessoa = new PessoaDAO();

	//O botão excluir traz do querySelect o id para esta mesma pagina(get)
	if(isset($_GET['acao'])){
	    switch($_GET['acao']){
	        case 'deletar': 
	        $pessoaacao = $pessoa->queryBuscaDados($_GET['pessoaacao']);
            if($pessoa->queryDelete($_GET['pessoaacao']) == 'ok'){
                echo ("<script>
					   	window.alert('Usuário excluido com sucesso!');
					   	window.location.href='excluir.php';
    		  		   </script>");
            }else{
                echo '<script type="text/javascript">alert("Erro em deletar");</script>';
            }
                break;
    		}
	    }


?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8" />
		<title>Editar Cadastros</title>
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
			<h1>Excluir</h1>
			<hr/>
			<div class="col-md-12">
					<br/>
					<table class="table table-bordered">
						<td scope="col">Nome</td>
						<td scope="col">Telefone</td>
						<td scope="col">Cpf</td>
						<td scope="col">Data de Nascimento</td>
						<td scope="col">Sexo</td>
						<td scope="col">Excluir</td>

				    	<?php foreach($pessoa->querySelect() as $dados){ ?>

				    	<tr>
		        			<td><?=$dados['nome'];?></td>
			        		<td><?=$dados['telefone']?></td>
			        		<td><?=$dados['cpf']?></td>
			        		<td><?=$dados['datanascimento']?></td>
			        		<td><?=$dados['sexo']?></td>
							<td><div class="excluir"><a href="?acao=deletar&pessoaacao=<?=$dados['id'];?>" title="Excluir dados"><img src="imagens/ico-excluir.png" width="20" height="20" alt="Excluir"></a></div></td>
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