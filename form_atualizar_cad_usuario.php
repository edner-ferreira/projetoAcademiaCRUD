<?php
// 1º incluir o arquivo de conexao com o banco de dados
include "database.php";
// header é para carregar as configuraçoes em HTML e CSS do site
include "header.php";

// 2° Declarar uma variavel para receber o camando em sql
$sql_listar_por_id = "SELECT * FROM acad_user WHERE id_user=".$_GET['id_user'];

// 3° utilizar a função mysqli_query conectar ao banco e executaro comando em sql
// É necessario armazenar o resultado en uma variavel
$consulta_bd = mysqli_query($conexao, $sql_listar_por_id);

while($dados_bd = mysqli_fetch_array($consulta_bd)){?>
    <h2>Alterar cadastro de Usuário</h2>
    <form action="atualizar_cadastro_usuarios.php" method="post">
        <input type="hidden" name="id_user" id="id_user" value="<?php echo $dados_bd['id_user'];?>">
        <div class="mb-3 mt-3">
            <label for="nome_user" class="form-label">Nome completo:</label>
            <input type="text" class="form-control" name="nome_user" id="nome_user" value="<?php echo $dados_bd['nome_user'];?>">
        </div>
        <div class="mb-3 mt-3">

            <label for="email_user" class="form-label">E-mail:</label>
            <input type="text" class="form-control" name="email_user" id="email_user" value="<?php echo $dados_bd['email_user'];?>">
        </div>
        <div class="mb-3 mt-3">
            <label for="telefone_user" class="form-label">Telefone:</label>
            <input type="text" class="form-control" name="telefone_user" id="telefone_user" value="<?php echo $dados_bd['telefone_user'];?>">
        </div>
        <div class="mb-3 mt-3">
            <label for="password_user" class="form-label">Password:</label>
            <input type="text" class="form-control" name="password_user" id="password_user" value="<?php echo $dados_bd['password_user'];?>">
        </div>
        <input type="submit" value="Alterar cadastro usuário" class="btn btn-dark">
    </form>
<?php }?>
<a href='index.php'>HOME</a><br><br>
<a href='painel_academia.php'>Painel da academia</a><br><br>
<?php include "footer.php";?>


