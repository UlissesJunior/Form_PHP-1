<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercício 5</title>
</head>
<body>
    <?php 
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $resultado = $nota1/2+$nota2/2;

        if ($resultado>=8) {
            echo "<h1>Aprovado</h1>";    
        }
        if($resultado<=3) {
            echo "<h1>Reprovado</h1>";        
        }
        else if(($resultado>=4)&&($resultado<=7)){
            echo "<h1>Recuperação</h1>"; 
        }
    ?>
</body>
</html>