<?php

    require_once("globals.php");
    require_once("db.php");

    $flashMessage = [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MovieStar</title>
  <link rel="short icon" href="<?= $BASE_URL ?>img/moviestar.ico" />
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css" integrity="sha512-drnvWxqfgcU6sLzAJttJv7LKdjWn0nxWCSbEAtxJ/YYaZMyoNLovG7lPqZRdhgL1gAUfa+V7tbin8y+2llC1cw==" crossorigin="anonymous" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <!-- MovieStar CSS -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
</head>
<body>
<header>
    <nav id="main-navbar" class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="<?= $BASE_URL ?>">
            <img id="logo" src="<?= $BASE_URL ?>img/logo.svg" alt="MovieStar">
            <span id="moviestar-title">MovieStar</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        
        <form id="search-form" class="form-inline my-2 my-lg-0" action="<?= $BASE_URL?>search.php" method="GET">
          <input name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar Filmes" aria-label="Search">
          <button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
        </form>
        
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="<?= $BASE_URL ?>auth.php">Entrar /  Cadastrar</a></li>
            </ul>
          </div>
      </nav>
  </header>

  <?php if(!empty($flashMessage['msg'])): ?>

    <div class="msg-container">
        <p class="msg <?= $flashMessage['type'] ?>"><?= $flashMessage['msg'] ?></p>
    </div>

  <? endif; ?>