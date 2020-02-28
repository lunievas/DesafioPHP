<?php require_once('./includes/head.php'); ?>
<?php require_once('./includes/nav.php'); ?>
<?php




///////CRIANDO OS ERROS E VALIDANDO OS CAMPOS///////
session_start();

$array_erro = [];
if (isset($_POST['adicionar'])) {

    $nome = $_POST['nome'];
    if (empty($_POST['nome'])) {

        $array_erro[0] =  $_SESSION['vazio_nome'] = "Digite um nome";
    } 

    $email = $_POST['email'];
    if (empty($_POST['email'])) {

        $array_erro[1] =  $_SESSION['vazio_email'] = "Digite um email";
    } 

    $senha = $_POST['senha'];
    if(empty($_POST['senha'])){

        $array_erro[2] = $_SESSION['vazio_senha'] = "Tem que ter senha amadoh";
    }
};



//////// ADICIONANDO USUARIOS NO JSON ///////////

if (isset($_POST['adicionar']) && (empty($array_erro)) && ($_POST['senha'] === ($_POST['confsenha']))) {

    $id = [];
    $nome =  $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $confsenha = $_POST['confsenha'];



    $lista = file_get_contents('usuarios.json');

    $listadeu = json_decode($lista, true);

    $listadeu[] = [
        "id" => count($listadeu) +1,
        "nome" => $nome,
        "email" => $email,
        "senha" => $senha
    ];


    $inserir = json_encode($listadeu, JSON_PRETTY_PRINT);

    file_put_contents('usuarios.json', $inserir);
};
  
    $lista1 = file_get_contents('usuarios.json');
    $listadeu = json_decode($lista1,true);




?>



<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-4">
                <h1>Usuários</h1>
                <ul class="list-group list-group-flush">
                    <div>
                        <?php foreach($listadeu as $lista){;?>
                        <li class="list-group-item">
                            <p> <?php echo $lista['nome']?></p>
                            <p class="mt-1"><?php echo $lista ['email']?></p>
                        
                            <a href="editarUsuario.php?id=<?php echo $lista['id']?>" type="button" class="btn btn-primary"> Editar</a>
                            <button type="button" class="btn btn-danger">Excluir</button>
                            
                        </li>
                        <?php }; ?>

                    </div>

                </ul>
            </div>
            <div class="col-md-8">
                <h1>Adicionar usuários</h1>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="">
                        <small id="emailHelp" class="form-text text-muted"></small>
                        <?php
                        if (!empty($_SESSION['vazio_nome'])) {
                            echo "<p style = 'color: #f00;'>" . $array_erro[0]. "</p>";
                            unset($_SESSION['vazio_nome']);
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">E-mail</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="">
                        <small id="emailHelp" class="form-text text-muted"></small>
                        <?php
                        if (!empty($_SESSION['vazio_email'])) {
                            echo "<p style = 'color: #f00;'>" . $array_erro [1]. "</p>";
                            unset($_SESSION['vazio_email']);
                        }
                        ?>
                    </div>
                    <div>
                        <label for="inputPassword5">Senha</label>
                        <small id="senha" class="form-text text-muted">Mínimo 6 caracteres</small>
                        <input type="password" name="senha" id="senha" class="form-control" aria-describedby="passwordHelpBlock"
                        minlength="6">
                        <small id="emailHelp" class="form-text text-muted"></small>
                        <?php
                        if (!empty($_SESSION['vazio_senha'])) {
                            echo "<p style = 'color: #f00;'>" .  $array_erro [2] . "</p>";
                            unset($_SESSION['vazio_senha']);
                        }
                            ?>
                        
                                            
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirmar senha</label>
                        <input type="password" name="confsenha" class="form-control" id="confsenha" placeholder="">
                    </div>

                    <button type="submit" name="adicionar" class="btn btn-primary btn-block">Adicionar</button>
                </form>
            </div>
        </div>
</body>