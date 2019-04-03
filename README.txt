----------------- O que eu preciso para rodar a aplicação? -----------------

Ter o postgres e uma aplicação com servidor apache

----------------------- Como Usar a aplicação -----------------------

1) Habilitar drive do postgre no arquivo php.ini da sua aplicação caso esteja comentada, procure por:
extension=pdo_pgsql

2) Jogue todos os arquivos dentro da pasta do seu apache, exemplo: htdocs

3) Crie um banco de dados e importe o arquivo -> bancocadastro.sql no postgre(restore)  

4) Configurar o arquivo classes/Conexao.php para a sua conexão postgres nas variáveis $servidor, $usuario, $senha, $banco.

Site(demo-opcional): rafaelbuenobrt.000webhostapp.com

Pronto, agora é só acessar o site!



Versão do PHP: 7.3.3

contato: rafaelbuenobrt@gmail.com
