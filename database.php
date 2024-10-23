<?php

//variaveis para conectar ao banco de dados
$server_host = "localhost";
$server_user = "root";
$server_password = "";
$database_name = "academia";

//declaração de constante para conectar ao banco de dados
define('SERVER_HOST', 'localhost:3307');
define('SERVER_USER', 'root');
define('SERVER_PASSWORD', '');
define('DATABASE_NAME', 'academia');

//Função para conectar ao banco de dados(direta sem tratamentos de erros)
//A conexção ao banco de dados inicialmente não utilizar orientação a objetos
//$conexao = mysqli_connect($server_host, $server_user, $server_password, $database_name);

//Função sem o uso de variaveis ou constantes
//$conexao = mysqli_connect("localhost", "root", "", "sge");

//Função utilizando as constantes
$conexao = mysqli_connect(SERVER_HOST, SERVER_USER, SERVER_PASSWORD, DATABASE_NAME);

