
<?php require_once('includes/head.php'); ?>
<?php require_once('./includes/nav.php'); ?>

<body>
    <div class="container mt-3 ">
        <div class="form-row ">

            <form class="form-group col-md-6 mx-auto">
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <a href="http://cadastro.php">Ainda não tenho cadastro</a>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Logar</button>
            </form>

        </div>

    </div>


    <?php require_once('./includes/scripts.php'); ?>
</body>