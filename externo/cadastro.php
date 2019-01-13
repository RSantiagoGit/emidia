<?php include_once('includes/header.php'); ?>
    <h2>Cadastre-se</h2>
    <p>Informe seus dados de acesso<br></p>
<?php if (isset($_SESSION['status'])) { ?>
    <div class="row">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Erro ao cadastrar usuário, tente novamente!
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
            <form method="post" action="core.php/cadastro">
                <input type="hidden" name="action" value="cadastro">
                <div class="form-group">
                    <label for="exampleInputNome1">Nome</label>
                    <input type="text" name="nome" class="form-control" id="exampleInputNome1" aria-describedby="nomeHelp"
                           placeholder="Nome"  required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Email"  required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha"  required>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
<?php include_once('includes/footer.php'); ?>