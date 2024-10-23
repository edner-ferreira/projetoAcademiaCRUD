<?php
//Inclusão do arquivo de conexão com o banco de dados
include 'database.php';

//Declarar variaveis para armazenar as informações enviada via formulario
$nome_user = $_POST['nome_user'];
$email_user = $_POST['email_user'];
$telefone_user = $_POST['telefone_user'];
$password_user = $_POST['password_user'];
$profile_user = $_POST['profile_user'];

//Construir uma string para cadastrar as informações no banco de dados
$sql = "INSERT INTO acad_user (nome_user, email_user, telefone_user, password_user, profile_user) 
    VALUES ('$nome_user', '$email_user', '$telefone_user', '$password_user', '$profile_user')";

//Função para cadastrar no banco de dados
if(mysqli_query($conexao, $sql)){
    //Função para redirecionar para pagina indicada
    header("location: form_login.php");
    // echo "Deu certo!";
}else{
    echo "Falha ao cadastrar no banco de dados";
}


/* SELECT * FROM `sge_alunos`


UPDATE `sge_alunos` SET `telefone_aluno` = '(11) 99999-9998' WHERE `sge_alunos`.`id_aluno` = 1

DELETE FROM sge_alunos WHERE `sge_alunos`.`id_aluno` = 2 */