----------------- O que eu preciso para rodar a aplica��o? -----------------

Ter o postgres e uma aplica��o com servidor apache

----------------------- Como Usar a aplica��o -----------------------

1) Habilitar drive do postgre no arquivo php.ini da sua aplica��o caso esteja comentada, procure por:
extension=pdo_pgsql

2) Jogue todos os arquivos dentro da pasta do seu apache, exemplo: htdocs

3) Crie um banco de dados e importe o arquivo -> bancocadastro.sql no postgre(restore)  

4) Configurar o arquivo classes/Conexao.php para a sua conex�o postgres nas vari�veis $servidor, $usuario, $senha, $banco.

Site(demo-opcional): rafaelbuenobrt.000webhostapp.com

Pronto, agora � s� acessar o site!

contato: rafaelbuenobrt@gmail.com