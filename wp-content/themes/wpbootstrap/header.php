<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>
<body>

<div class="container bo-container">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
        <a class="navbar-brand" href="#">Wordpress</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php //wp_list_pages(array('title_li' => '')); ?>

                <li class="nav-item active">
                    <a class="nav-link" href="<?php home_url(); ?>">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php home_url(); ?>noticias">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php home_url(); ?>contato">Contato </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php home_url(); ?>externo/cadastro">Cadastre-se</a>
                </li>

            </ul>
                <a class="btn btn-outline-success my-2 my-sm-0" href="<?php home_url(); ?>externo/login.php" >Entre</a>
        </div>
    </nav>