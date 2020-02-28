<?php require_once('./includes/head.php'); ?>
<?php require_once('./includes/nav.php'); ?>

<?php
session_start();

////////EDITAR USUARIOS/////////


$array_erro = [];

if(isset($_GET['id'])){

    $usuarios = file_get_contents('usuarios.json'); ////PEGANDO ID LA DO JSON ///////

    $listaDeUser = json_decode($usuarios,true); /////BOTANDO PRA STRING/////// 

    $posicao = array_search($_GET['id'], array_column($listaDeUser, 'id'));//////PROCURANDO LA NO JSON O ID NA POSIÇÃO//////
}

///////VALIDAÇÕES///////////



if(isset($_POST['edit'])){


    $nome = $_POST['nome'];
    if (empty($_POST['nome'])) {

        $array_erro[0] =  $_SESSION['vazio_nome'] = "Digite um nome";
    } else {
        $_SESSION['value_nome'] = $_POST['nome'];
    }

    $email = $_POST['email'];
    if (empty($_POST['email'])) {

        $array_erro[1] =  $_SESSION['vazio_email'] = "Digite um email";
    } else {
        $_SESSION['value_email'] = $_POST['email'];
    }


    if (isset($_POST['edit']) && (empty($array_erro)) ){

        $dadosEditados = [
            "id" => $listaDeUser[$posicao]['id'],
            "nome" => $_POST['nome'],
            "email" => $_POST['email']
        ]; 
        
        if(empty($_POST['senha'])){
            $dadosEditados ['senha'] = $listaDeUser[$posicao]['senha'];
        }else{
             $dadosEditados ['senha'] = $_POST['senha'];
        }


        $listaDeUser[$posicao] = $dadosEditados;

        $listaUsuarios = json_encode($listaDeUser, JSON_PRETTY_PRINT);

        file_put_contents('usuarios.json', $listaUsuarios);




    }
}









?>

<body>
    <div class="container">
        <div class="mt-3">
            <h1>Editar usuário</h1>
            <form method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nome" value="<?php echo $listaDeUser[$posicao]['nome']?>"  placeholder="">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo $listaDeUser[$posicao]['email']?>" placeholder="">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div>
                    <label for="inputPassword5">Senha</label>
                    <small id="passwordHelpBlock" class="form-text text-muted">Mínimo 6 caracteres</small>
                    <input type="password" id="inputPassword5" name="senha" class="form-control" aria-describedby="passwordHelpBlock">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirmar senha</label>
                    <input type="password" class="form-control" name="confsenha" id="exampleInputPassword1" placeholder="">
                </div>

                <button type="submit" class="btn btn-warning btn-block" name="edit">Editar</button>
            </form>

        </div>

    </div>





</body>