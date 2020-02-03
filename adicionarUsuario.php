<?php require_once('./includes/head.php'); ?>
<?php require_once('./includes/nav.php'); ?>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-4">
                <h1>Usuários</h1>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <p>Adm </p>
                        <p class="mt-1"> adm@adm.com</p>
                    </li>
                    <li class="list-group-item">
                        <p> Camila</p>
                        <p class="mt-1">camila@gmail.com
                    </li>
                </ul>
            </div>
            <div class="col-md-8">
                <h1>Adicionar usuários</h1>
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

                    <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
                </form>
            </div>
        </div>
</body>