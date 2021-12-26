<?php include __DIR__.'/../header.php'; ?>
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <form action="/realiza-login" method="post">
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="email@email.com">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" class="form-control" placeholder="******">
                </div>
                <button class="btn btn-outline-dark">
                    Entrar
                </button>
                <a href="cadastro-usuario" class="btn btn-success">
                    Cadastrar
                </a>
            </form>
        </div>
    </div>
<?php include __DIR__.'/../footer.php'; ?>