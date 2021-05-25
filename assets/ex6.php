<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercício 6</title>
</head>
<body>
<?php 
        $name = $_POST["name"];
        $peso = $_POST["peso"];
        $sexo = $_POST["sexo"];
        $altura = (float) $_POST["altura"];
        if($sexo == "Masculino") {
            $pi=pow($altura,2)*23;
            echo "<h1>Seu peso é: $peso kg <br> O peso ideal é: $pi kg<h1>";

                if($peso>$pi) {
                    echo '<font color="red" >'."Você está acima do peso ideal".'<font>';    
                }
                if($peso<$pi) {
                    echo '<font color="yellow" >'."Você está abaixo do peso ideal".'<font>';    
                }
                else if($peso==$pi) {
                    echo '<font color="blue" >'."Você está dentro do peso ideal".'<font>';    
                }
            
        }
        else if($sexo == "Feminino") {
            $pi= pow($altura, 2)*22;
            echo "<h1>Seu peso é: $peso kg <br> O peso ideal é: $pi kg<h1>";

                if($peso>$pi) {
                    echo '<font color="red" >'."Você está acima do peso ideal".'<font>';    
                }
                if($peso<$pi) {
                    echo '<font color="yellow" >'."Você está abaixo do peso ideal".'<font>';    
                }
                else if($peso==$pi) {
                    echo '<font color="blue" >'."Você está dentro do peso ideal".'<font>';    
                }
        }
?>
</body>
</html>