<?php require "header.php";?>
    <p class="h1">Cadastro de usuário da academia</p>
    <form action="cadastro_cliente.php" method="post">
        <div class="mb-3 mt-3">
            <label for="nome_user" class="form-label">Nome completo:</label>
            <input type="text" class="form-control" name="nome_user" id="nome_user">
        </div>
        <div class="mb-3 mt-3">
            <label for="email_user" class="form-label">E-mail:</label>
            <input type="text" class="form-control" name="email_user" id="email_user">
        </div>
        <div class="mb-3 mt-3">
            <label for="telefone_user"class="form-label">Telefone:</label>
            <input type="text" class="form-control" name="telefone_user" id="telefone_user">
        </div>
        <div class="mb-3 mt-3">
            <label for="password_user"class="form-label">Password:</label>
            <input type="password" class="form-control" name="password_user" id="password_user">
        </div>
        <input type="hidden" name="profile_user" id="profile_user" value="user">
        <input type="submit" value="Cadastar usuário" class="btn btn-dark">
    </form>
    <a href='index.php' class="link-underline-dark">HOME</a><br><br>

<?php require "footer.php";?>