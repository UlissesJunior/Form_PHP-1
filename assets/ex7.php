<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercício 7</title>
</head>
<body>
    <?php
        $temp = $_POST["temp"];
        $i=0;

        for($i=0; $i<=10; $i++) {
            $r=$temp;
            $r=($temp-32)*5/9;
            echo "<br> A temperatura $temp em ºC é: $r<br>";
            $temp=$temp+1;
        }
    ?>
</body>
</html>