<?php require_once('includes/head.php'); ?>
<?php require_once('./includes/nav.php'); ?>

<?php
session_start();
if (isset($_POST['logar'])) {
        $array_erro = [];

    $email = $_POST['email'];
    if (empty($_POST['email'])) {

      $array_erro[] = $_SESSION['vazio_email'] = "Digite um email";
    }
    $senha = $_POST['senha'];
    if (empty($_POST['senha'])) {
        
       $array_erro[] = $_SESSION['vazio_senha'] = "Digite uma senha";
    }
};

    $email = $_POST['email'];
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "Email correto";
}else{
    echo"Email inválido";
}


?>

<body>
    <div class="container mt-3 ">
        <div class="form-row ">

            <form method="POST" class="form-group col-md-6 mx-auto">
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted"></small>
                    <?php
                    if (!empty($_SESSION['vazio_email'])) {
                        echo "<p style ='color: #f00;'> ". $array_erro [0]. "</p>";
                        unset($_SESSION['vazio_email']);
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
                    <?php
                    if(!empty($_SESSION['vazio_senha'])){
                        echo "<p style ='color: #f00;'> ". $array_erro[1] . "</p>";
                        unset ($_SESSION['vazio_senha']);
                    }





                    ?>
                </div>
                <div class="mb-3">
                    <a href="http://cadastro.php">Ainda não tenho cadastro</a>
                </div>

                <button type="submit" name="logar" class="btn btn-primary btn-block">Logar</button>
            </form>

        </div>

    </div>


    <?php require_once('./includes/scripts.php'); ?>
</body>