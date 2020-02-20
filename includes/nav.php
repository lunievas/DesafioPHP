<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/head.php'); ?>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      < Desafio PHP />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="indexProdutos.php">Home <span class="sr-only">(Página atual)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="createProduto.php">Adicionar produto</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="createUsuario.php">Usuário</a>
        </li>
      </ul>
    </div>
    <div class="align-self-end">
      <div class="nav-item active">
        <a class="nav-link form-control mr-sm-2 " href="#">Logout</a>
      </div>
    </div>



  </nav>

  <?php require_once('./includes/nav.php') ?>
</body>