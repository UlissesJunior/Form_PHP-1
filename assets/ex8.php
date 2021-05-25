<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercício 8</title>
</head>
<body>
    <?php
    $number = $_POST["number"];
    $int=0;
    for($int=0;$int<=20;$int++) {
        $r=$number;
        echo "<br>";     
        echo "A raiz de $r é: ";
        echo sqrt($number); 
        echo "<br>";        
        $number=$number+1;
    }
    ?>
</body>
</html>