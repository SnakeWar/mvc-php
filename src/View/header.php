<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?= $titulo ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php if(isset($_SESSION['logado'])): ?>
    <header>
        <div class="px-3 py-2 bg-dark text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/listar-cursos" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                        <img class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap" src="/assets/img/logo.png">
                    </a>

                    <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                        <li>
                            <a href="/listar-cursos" class="nav-link text-secondary">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href=""></use></svg>
                                Cursos
                            </a>
                        </li>
<!--                        <li>-->
<!--                            <a href="#" class="nav-link text-white">-->
<!--                                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"></use></svg>-->
<!--                                Dashboard-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#" class="nav-link text-white">-->
<!--                                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"></use></svg>-->
<!--                                Orders-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#" class="nav-link text-white">-->
<!--                                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"></use></svg>-->
<!--                                Products-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#" class="nav-link text-white">-->
<!--                                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"></use></svg>-->
<!--                                Customers-->
<!--                            </a>-->
<!--                        </li>-->
                    </ul>
                    <div class="text-end ml-auto">
                        <a href="/logout" class="btn btn-outline-light me-2">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

<?php else:  ?>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/listar-cursos" class="nav-link px-2 text-secondary">Cursos</a></li>
<!--                    <li><a href="#" class="nav-link px-2 text-white">Features</a></li>-->
<!--                    <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>-->
<!--                    <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>-->
<!--                    <li><a href="#" class="nav-link px-2 text-white">About</a></li>-->
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                </form>

                <div class="text-end ml-auto">
                    <a href="/login" class="btn btn-outline-light me-2">Entrar</a>
                    <a href="/cadastro-usuario" class="btn btn-success">Cadastrar</a>
                </div>
            </div>
        </div>
    </header>
<?php endif  ?>
    <div class="container mt-2" style="height: content-box">
        <div class="jumbotron">
            <h1><?= $titulo ?></h1>
        </div>
        <?php  if(isset($_SESSION['tipo_mensagem'])): ?>
        <div class="alert alert-<?= $_SESSION['tipo_mensagem'] ?>">
            <?= $_SESSION['mensagem'] ?>
        </div>
        <?php  endif ?>

        <?php
            unset($_SESSION['tipo_mensagem']);
            unset($_SESSION['mensagem']);
        ?>

