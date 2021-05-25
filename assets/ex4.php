<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercício 4</title>
</head>
<body>
    <?php 
        $user = $_POST["user"];
        $password = $_POST["password"];
        if (($user=="unesp")&&($password=="cotec")) {
            echo "<h1>Seja bem vindo ao Sistema de Ativação</h1>";    
        }
        else {
            echo "<h1>Usuário ou Senha inválidos!!!</h1>";    
            echo "<h1>Tente novamente!!!</h1>"; 
        }
    ?>
</body>
</html>