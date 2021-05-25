<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercício 9</title>
    
</head>
<body>
    <table>
        <?php
        $number = $_POST["number"];
        $frase = $_POST["frase"];
        $a = 1;
        while ($a <= $number) {
            echo "<tr>";
            echo "<td>$a</td><td>$frase</td>";
            echo "<tr>";
            $a++;
        }

        ?>
    </table>
</body>
</html>