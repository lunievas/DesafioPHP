<?php require_once('./includes/head.php'); ?>
<?php require_once('./includes/nav.php'); ?>
<?php
////////INICIANDO A SESSÃO, CRIANDO O ARRAY DE ERROS E VALIDANDO///////////
session_start();
if (isset($_POST['adicionar'])) {

    $array_erros = [];


    $produto = $_POST['produto'];
    if (empty($_POST['produto'])) {

        $array_erros[0] = $_SESSION['vazio_produto'] = "Adicione um produto";
    } else {
        $_SESSION['value_produto'] = $_POST['produto'];
    }

    $preco = $_POST['preco'];
    if (empty($_POST['preco'])) {

        $array_erros[1] = $_SESSION['vazio_preco'] = "Adicione um preço";
    }

    $imagem = $_FILES['imagem']['tmp_name'];
    if (!$imagem) {
        $array_erros[3] = $_SESSION['vazio_imagem'] = "Adicione uma foto";
    }
    print_r($array_erros);
}

//////////ADICIONANDO OS PRODUTOS NO JSON////////////////
    if(isset($_POST['adicionar']) and (empty($array_erros))){

        $id=[];
        $produto = $_POST['produto'];
        $preco = $_POST['preco'];
        $imagem = $_FILES['imagem'];

        $lista = file_get_contents('produtos.json'); ///pegando os arquivos do json///

        $listaDeP = json_decode($lista,true); ////decodificando para string////

        $listaDeP [] = [
            "id" => count($listaDeP) +1,
            "produto" => $produto,         ///adicionando na lista de usuarios///
            "preco" => $preco,
            "imagem" => $imagem
        ];

        $inserir = json_encode($listaDeP, JSON_PRETTY_PRINT); ///////de string para arq json////

        file_put_contents('produtos.json', $inserir); /////colocando no json///////


    }












?>

<body>
    <div class="container">
        <div class="mt-3">
            <h1>Adicionar Produto</h1>

            <form action="" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nome</label>
                        <input type="text" name="produto" class="form-control" id="inputEmail4" 
                        <?php
                        if (!empty($_SESSION['value_produto'])) { ////setando o valor no input////
                            echo "value ='" . $_SESSION['value_produto'] . "'";
                            unset($_SESSION['value_produto']);
                        }
                        ?>>
                        <small id="emailHelp" class="form-text text-muted"></small>
                        <?php
                        if (!empty($_SESSION['vazio_produto'])) { //////colocando o erro//////
                            echo "<p style = 'color: #f00;'>" . $array_erros[0] . "</p>";
                            unset($_SESSION['vazio_produto']);
                        }
                        ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Preço</label>
                        <input type="text" name="preco" class="form-control" id="inputPassword4">
                        <?php
                        if (!empty($_SESSION['vazio_preco'])) {
                            echo "<p style = 'color: #f00;'>" . $array_erros[1] . "</p>";
                            unset($_SESSION['vazio_preco']);
                            
                        }

                        ?>
                    </div>
                </div>

        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descrição</label>
            <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="10"></textarea>
        </div>


        <div class="form-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="imagem" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                <label class="custom-file-label" for="inputGroupFile04">Selecione a foto</label>
                <?php
                        if (!empty($_SESSION['vazio_imagem'])) {
                            echo "<p style = 'color: #f00;'>" . $array_erros[3] . "</p>";
                            unset($_SESSION['vazio_imagem']);
                        }

                        ?>
            </div>
        </div>

        <div class="mt-2">
            <button type="submit" name="adicionar" class="btn btn-primary  btn-block">Adicionar</button>
        </div>
        </form>

    </div>






    <?php require_once('./includes/scripts.php'); ?>
</body>

</html>