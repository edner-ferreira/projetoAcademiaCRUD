<?php
// 1º incluir o arquivo de conexao com o banco de dados
include "database.php";
// header é para carregar as configuraçoes em HTML e CSS do site
include "header.php";

// 2° Declarar uma variavel para receber o camando em sql
$sql_listar = "SELECT * FROM acad_user";
// Ecluir aluno
$sql_excluir = "DELETE FROM acad_user WHERE id_user=";

// 3° utilizar a função mysqli_query conectar ao banco e executaro comando em sql
// É necessario armazenar o resultado en uma variavel
$consulta_bd = mysqli_query($conexao, $sql_listar);
?>

<!-- tabela para listar os dados -->
<table class="table">
    <!-- cabeçalho da tabela -->
    <thead>
    <!-- tr - table row - linha da tebela -->
    <tr class="table-light">
        <!-- th - o nome que no indice da coluna -->
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Password</th>
        <th>Profile</th>
        <th>Atualizar</th>
        <th>Excluir</th>
        <th></th>
    </tr>
    </thead>
    <!-- corpo da tebela -->
    <tbody >
    <!-- tr - table row  -->
    <?php while($dados_bd = mysqli_fetch_array($consulta_bd)){?>
        <tr>
            <!-- td - table data - campo que vai receber o valor -->
            <td><?php echo $dados_bd['id_user'];?></td>
            <td><?php echo $dados_bd['nome_user'];?></td>
            <td><?php echo $dados_bd['email_user'];?></td>
            <td><?php echo $dados_bd['telefone_user'];?></td>
            <td><?php echo $dados_bd['password_user'];?></td>
            <td><?php echo $dados_bd['profile_user'];?></td>
            <td><a href="form_atualizar_cad_usuario.php?id_user=<?php echo $dados_bd['id_user'];?>"><img src="image/atualizar.png" alt="atualizar"></a></td>
            <td><a href="excluir_usuario.php?id_user=<?php echo $dados_bd['id_user'];?>"><img src="image/excluir.png" alt="excluir"></a></td>
        </tr>
    <?php }?>
    </tbody>
</table><br><br>
<a href='index.php'>HOME</a><br><br>
<a href='painel_academia.php'>Painel da academia</a><br><br>
<?php include "footer.php";?>
