<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/head.php'); ?>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      < Desafio PHP/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Adicionar produto</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Usuário</a>
        </li>

        <div class="justify-content-end">
          <li class="nav-item active">
            <a class="nav-link disabled" href="#">Logout</a>
          </li>
        </div>
      </ul>

  </nav>

  <?php require_once('./includes/nav.php') ?>
</body>