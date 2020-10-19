<?php
//Arquivo PHP que faz a conexão com o Banco de Dados PHPMyAdmin
//De forma simples ele utiliza do host local(localhost), usuário Padrão(root), não utiliza-se de senha
//Nome do banco é agenda, sendo utilizado o sql recomendado da prova no git
$host = "localhost";
$user = "root";
$pass = "";
$banco = "agenda";
$conexao = mysqli_connect($host,$user,$pass,$banco) or die("ERROR".mysqli_connect_error());

//mysqli_select_db($banco)
// Constantes de configuração de conexão com o DATABASE
/*define("SERVIDOR","localhost");
define("USUARIO", "root");
define("SENHA", "");
define("BANCO","agenda");*/