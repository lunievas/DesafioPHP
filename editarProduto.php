<?php require_once('./includes/head.php'); ?>
<?php require_once('./includes/nav.php'); ?>

<body>
    <div class="container">
        <div class="mt-3">
            <h1>Editar Produto</h1>

            <form action="indexProdutos.php" method="post"></form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nome</label>
                        <input type="email" name="nome" class="form-control" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Preço</label>
                        <input type="password" name="preco" class="form-control" id="inputPassword4">
                    </div>
                </div>
            </form>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descrição</label>
            <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="10"></textarea>
        </div>
        </form>

        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                <label class="custom-file-label" for="inputGroupFile04">Selecione a foto</label>
            </div>
        </div>

        <div class="mt-2">
            <button type="button" class="btn btn-warning btn-block">Adicionar</button>
        </div>

    </div>






    <?php require_once('./includes/scripts.php'); ?>
</body>

</html>