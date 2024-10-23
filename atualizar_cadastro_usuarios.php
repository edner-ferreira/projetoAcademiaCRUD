<?php

// 1º incluir o arquivo de conexao com o banco de dados
include "database.php";

$id_user = $_POST['id_user'];
$nome_user = $_POST['nome_user'];
$email_user = $_POST['email_user'];
$telefone_user = $_POST['telefone_user'];
$password_user = $_POST['password_user'];

// alterar usuario
$sql_alterar = "UPDATE acad_user SET nome_user ='$nome_user', email_user ='$email_user',
    telefone_user = '$telefone_user', password_user = '$password_user' WHERE id_user ='$id_user'";

// 3° utilizar a função mysqli_query conectar ao banco e executaro comando em sql
// É necessario armazenar o resultado en uma variavel
if (!$consulta_bd = mysqli_query($conexao, $sql_alterar)){
    header("Location: form_atualizar_cad_usuario.php?id_user='.$id_user'");
}else{
    header("Location: painel_academia.php");
}
