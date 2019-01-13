<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <?php if (isset($_SESSION['login']) && $_SESSION['login'] != '') { ?>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">
    <?php } ?>
    <script type="text/javascript" src="assets/js/jquery-3.2.1.slim.min.js"></script>
</head>
<body>

<div class="container bo-container">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
        <a class="navbar-brand" href="#">Externo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <?php if (!isset($_SESSION['login']) || $_SESSION['login'] == '') { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro.php">Cadastre-se</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="postagem.php">Novo Post</a>
                </li>
                <?php } ?>
            </ul>
            <?php if (isset($_SESSION['login']) && $_SESSION['login'] != '') { ?>
                <span class="btn btn-primary ">Ola <?= $_SESSION['login'] ?>!</span>
                <a class="btn btn-outline-success my-2 my-sm-0" href="core.php/logout">Sair</a>
            <?php } ?>
        </div>
    </nav>