<?php

// 1º incluir o arquivo de conexao com o banco de dados
include "database.php";

// excluir usuario
$sql_excluir = "DELETE FROM acad_user WHERE id_user =".$_GET['id_user'];

// 3° utilizar a função mysqli_query conectar ao banco e executaro comando em sql
// É necessario armazenar o resultado en uma variavel
if ($consulta_bd = mysqli_query($conexao, $sql_excluir)){
    header("Location: listar_usuarios.php");
}else{
    echo "Falha ao excluir cadastro!";
}
