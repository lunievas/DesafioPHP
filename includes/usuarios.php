<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        <?php

        // pegar usuários//
        function getUsers()
        {
                $users = json_decode(file_get_contents("usuarios.json"), true);
                echo '<pre>';
                var_dump($users);
                echo '</pre>';
                exit;
        }
        //pegar usuarios por id //
        function getUsersById($id)
        {
        }
        //criar usuario//
        function createUser($data)
        {
        }
        //editar usuario//
        function updateUser($data, $id)
        {
        }
        //deletar usuario//
        function deleteUser($id)
        {
        }











        ?>

</body>

</html>