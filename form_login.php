<?php include 'header.php';?>
    <h2>Login de Usuário</h2>
    <form action="valida_login.php" method="post">
        <div class="mb-3 mt-3">
            <label for="email_user" class="form-label">E-mail de usuario:</label><br>
            <input type="text" class="form-control" name="email_user" id="email_user">
        </div>
        <div class="mb-3">
            <label for="password_user" class="form-label">Senha:</label><br>
            <input type="password" class="form-control" name="password_user" id="password_user">
        </div>
        <input type="submit" value="Logar no sistema" class="btn btn-dark">
    </form>
    <p><a href="#" class="link-underline-dark">Esqueceu sua senha?</a></p>
    <p><a href="form_cad_cliente.php" class="link-underline-dark">Cadastre-se</a></p>
    <a href='index.php' class="link-underline-dark">HOME</a><br><br>

<?php require "footer.php";?>