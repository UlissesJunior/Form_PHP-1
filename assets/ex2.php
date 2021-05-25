<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercício 2</title>
    <style>
        body {
        color: <?php
        $number = $_POST["number"];
        if($number>=0) {
            echo "#0A84FF";  
        } 
        else{
            echo "#F44336";
        } 
        ?>;
       
    }    
    </style> 
</head>
<body>
    <?php 
        $number = $_POST["number"];
        if($number>=0) {
            echo "<h1>Número Positivo</h1>";    
        }
        else {
            echo "<h1>Número Negativo</h1>";    
        }
    ?>
</body>
</html>