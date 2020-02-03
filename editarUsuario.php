<?php require_once('./includes/head.php'); ?>
<?php require_once('./includes/nav.php'); ?>

<body>
    <div class="container">
        <div class="mt-3">
            <h1>Editar usuário</h1>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div>
                    <label for="inputPassword5">Senha</label>
                    <small id="passwordHelpBlock" class="form-text text-muted">Mínimo 6 caracteres</small>
                    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirmar senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>

                <button type="submit" class="btn btn-warning btn-block">Adicionar</button>
            </form>

        </div>

    </div>





</body>