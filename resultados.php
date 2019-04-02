<?php

	require_once ('classes/Pessoa.php');
  require_once ('classes/PessoaDAO.php');
	require_once ('classes/Conexao.php');

	$pessoa = new PessoaDAO();
  $con = new Conexao();

?>
<!DOCTYPE html>
<html lang="pt-br">

  <head>
		<meta charset="UTF-8" />
		<title>Resultados</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
    <header>

      <?php include ("menu.php");?>

    </header>
    <main>
      <div class="conteudo">
  		<h1>Resultados</h1>
      <hr/>
      <div class="col-md-12">
          <br/>
          <table class="table table-bordered">
            <td scope="col">Nome</td>
            <td scope="col">Telefone</td>
            <td scope="col">Cpf</td>
            <td scope="col">Data de Nascimento</td>
            <td scope="col">Sexo</td>
      <?php

        if(isset($_POST['buscar'])){
            $buscar = $_POST['buscar'];
            $cst = $con->conectarBanco()->prepare("SELECT nome, telefone, cpf, datanascimento,sexo FROM public.pessoa WHERE nome LIKE '%".$buscar."%';");

                $cst->execute();

                if (!$cst->rowCount() == 0) {
                  while ($resultados = $cst->fetch()) {
                      echo "<tr>";
                      echo "<td>" .$resultados['nome'] . "</td>";
                      echo "<td>" .$resultados['telefone'] . "</td>";
                      echo "<td>" . $resultados['cpf'] . "</td>";
                      echo "<td>" .$resultados['datanascimento'] . "</td>";
                      echo "<td>" .$resultados['sexo'] . "</td>";
                      echo "</tr>";
                  }
                }else {
                    echo 'Nada foi encontrado';
                }
          }

      ?>
          </table>
        </div>
      </div>
    </main>
  <footer>
        <p>Copyright © 2019 Rafael B. - Todos os direitos reservados</p>
  </footer>
	</body>

</html>