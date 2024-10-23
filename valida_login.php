<?php

//incluir o arquivo de conexao com o banco de dados
include 'database.php';

//incluir uma sessao no php
session_start();

//recuperar as informaçoes enviadas do formulario
$email_user = $_POST['email_user'];
$password_user = $_POST['password_user'];

//criar uma validacao para verificar se os campos do formulario foram preenchidos
if(empty($email_user)){
    $_SESSION['mensagem'] = "Preencha o campo E-mail de usuario";
    header("Location: form_login.php");
}elseif(empty($password_user)){
    $_SESSION['mensagem'] = "Preencha o campo Password";
    header("Location: form_login.php");
}else{
    //criar um SQL para validar os dados
    $sql_login = "SELECT * FROM acad_user WHERE email_user = '$email_user'
        AND password_user = '$password_user'";

    //acessar e executar os valores no banco de dados
    $consulta_login = mysqli_query($conexao, $sql_login);

    //converter os resultados obtidos a um array associativo
    $dados_login = mysqli_fetch_array($consulta_login);

    //validar o login com o retorno dos dados
    if($dados_login['email_user'] == $email_user and
        $dados_login['password_user'] == $password_user){
        //criar um array com os dados do usuario
        $usuario = array("id_user"=>$dados_login['id_user'],
            "login"=>$dados_login['email_user'],
            "senha"=>$dados_login['password_user'],
            "perfil"=>$dados_login['profile_user']);

        //colocar o array de usuario na sessao
        $_SESSION['usuario'] = $usuario;

        //redireciona para a pagina do painel (verificar o perfil)
        header("Location: painel_academia.php");
    }else{
        //criar na sessao uma mensagem de aviso com o erro
        $_SESSION['mensagem'] = "Login ou senha invalidos";
        header("Location: form_login.php");
    }
}

