<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/head.php'); ?>
<?php require_once('./includes/nav.php'); ?>

<?php
   $lista =  file_get_contents('produtos.json');

    $listaDeProdutos = json_decode($lista,true);




?>

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
        <?php foreach($listaDeProdutos as $lista){;?>
        <tr>
          <div>
          <th scope="row"><?php echo $lista['id']?></th>
          <td><?php echo $lista['produto'] ?></td>
          <td> <?php echo $lista['descricao'] ?></td>
          <td><?php echo $lista['preco'] ?></td>
          </div>
          <td><a href="editarProduto.php?id=<?php echo $lista['id']?>" type="button" class="btn btn-primary">Editar</a>
          <button type="button" class="btn btn-danger">Excluir</button>
        </td>
      </tr>
      <?php };?>


      </tbody>
    </table>
  </div>










  </div>

  <?php require_once('./includes/scripts.php'); ?>
</body>

</html>