<?php include_once('includes/header.php'); ?>
    <h2>Login</h2>
    <p>Informe seus dados de acesso<br></p>

<?php if (isset($_SESSION['status'])) { ?>
    <div class="row">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Usuário e ou senha inválidos!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
<?php }
unset($_SESSION['status']);
?>

    <div class="row">
        <div class="col-6">
            <form method="post" action="core.php/login">
                <input type="hidden" name="action" value="login">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" name="senha" class="form-control" id="exampleInputPassword1"
                           placeholder="Senha" required>
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>
    </div>
<?php include_once('includes/footer.php'); ?>