<?php require_once('./includes/head.php'); ?>
<?php require_once('./includes/nav.php'); ?>

<?php
session_start();

$array_erro = [];
///////EDITAR PRODUTOS////////


if (isset($_GET['id'])) {

    $produtos = file_get_contents('produtos.json');

    $listaDeProdutos = json_decode($produtos, true);

    $posicao = array_search($_GET['id'], array_column($listaDeProdutos, 'id'));
}

///////VALIDAÇÕES/////

if (isset($_POST['editar'])) {



    $produto = $_POST['produto'];
    if (empty($_POST['produto'])) {

        $array_erros[0] = $_SESSION['vazio_produto'] = "Adicione um produto";
    }

    $preco = $_POST['preco'];
    if (empty($_POST['preco'])) {

        $array_erros[1] = $_SESSION['vazio_preco'] = "Adicione um preço";
    } else if (!is_numeric($_POST['preco'])) {
        $array_erros[2] = $_SESSION['vazio_numerico'] = "O preço tem que ser numérico";
    }

    $imagem = $_FILES['imagem']['tmp_name'];
    if (empty($_FILES['imagem'])) {
        $array_erros[3] = $_SESSION['vazio_imagem'] = "Adicione uma foto";
    }



    ////////////////////////////////////////////////////



    if (isset($_POST['editar']) && (empty($array_erro))) {

        $dadosEditados = [
            "id" => $listaDeProdutos[$posicao]['id'],
            "produto" => $_POST['produto'],
            "preco" => $_POST['preco'],
            "descricao" => $_POST['descricao'],
            "imagem" => $_FILES['imagem']
        ];

        if (empty($_POST['produto'])) {
            $dadosEditados['produto'] = $listaDeProdutos[$posicao]['produto'];
        } else {
            $dadosEditados['produto'] = $_POST['produto'];
        }


        $listaDeProdutos[$posicao] = $dadosEditados;

        $lista = json_encode($listaDeProdutos, JSON_PRETTY_PRINT);

        file_put_contents('produtos.json', $lista);
    }
}






?>

<body>
    <div class="container">
        <div class="mt-3">
            <h1>Editar Produto</h1>

            <form action="" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nome</label>
                        <input type="text" name="produto" class="form-control" id="inputEmail4" value="<?php echo $listaDeProdutos[$posicao]['produto']?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Preço</label>
                        <input type="text" name="preco" class="form-control" id="inputPassword4" value="<?php echo $listaDeProdutos[$posicao]['preco']?>">
                    </div>
                </div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descrição</label>
            <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1"  rows="10">
                <?php echo $listaDeProdutos[$posicao]['descricao']?>
            </textarea>
        </div>


        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="imagem" id="inputGroupFile04"" >
                <label class="custom-file-label" for="inputGroupFile04">Selecione a foto</label>
            </div>
        </div>

        <div class="mt-2">
            <button type="submit" name="editar" class="btn btn-warning btn-block">Editar</button>
        </div>
         </form>
    </div>






    <?php require_once('./includes/scripts.php'); ?>
</body>

</html>