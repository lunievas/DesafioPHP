<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/head.php'); ?>
<?php require_once('./includes/nav.php'); ?>

<body>

  <div class="container mt-4">
    <h1>Lista de Produtos</h1>

    <table class="table table-bordered ">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nome</th>
          <th scope="col">Descrição</th>
          <th scope="col">Preço</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Produto 1</td>
          <td>Descrição produto 1</td>
          <td>R$ 15</td>
          <td><button type="button" class="btn btn-primary">Editar</button>
            <button type="button" class="btn btn-danger">Excluir</button>
          </td>
        </tr>


      </tbody>
    </table>
  </div>










  </div>

  <?php require_once('./includes/scripts.php'); ?>
</body>

</html>