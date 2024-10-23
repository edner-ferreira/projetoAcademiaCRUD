<?php
require "header.php";

//iniciar a sessao em php
session_start();

//recuparar o array de usuario da sessao o armazenamento
$usuario = $_SESSION['usuario'];

//verificar o perfil de acesso ao sistema
if($usuario['perfil'] != "admin"){?>
    <!-- Conteudo em html - perfil aluno -->
    <h2>Painel do usuário da academia</h2>
    <br>
    <br>
    <p>Você tem a permissão de acesso: <?php echo $usuario['perfil']; ?></p>
    <h3>Seja Bem-vindo: <?php echo $usuario['login']; ?></h3>
    <div class="d-grid">
<!--         <a href="listar_cad_usuario.php?email_user=--><?php //echo $usuario['login'];?><!--" class="form-control">Acessar a sua conta</a><br>-->
        <a href="form_atualizar_cad_usuario.php?id_user=<?php echo $usuario['id_user'];?>" class="form-control">Editar a sua conta</a><br>
        <a href='index.php'>HOME</a><br><br>
    </div>
    <!-- fim do conteudo em html -->
<?php }else{?>
    <!-- Conteúdo em HTML perfil admin -->
    <h2>Painel administrativo da academia</h2>
    <br>
    <br>
    <p>Você tem a permissão de acesso: <?php echo $usuario['perfil']; ?></p>
    <h3>Seja Bem-vindo: <?php echo $usuario['login']; ?></h3>
    <div class="d-grid">
        <a href="listar_usuarios.php" class="form-control">Listar usuários da academia</a>
        <a href='index.php'>HOME</a><br><br>
    </div>

<?php }
?>
<?php require "footer.php";?>