<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercício 10</title>
</head>
<body>
<table>
<?php
            $name = $_POST['name'];
            $dim = $_POST['number'];
            $invest = $_POST['invest'];
            $data = $_POST['temp'];
            $tempM = date('m', strtotime($data));
            $tempY = date('Y', strtotime($data));
            $rest = 12*($tempY - date('Y')) + $tempM - date('m');
            $i = 1;

            echo "<td>Tempo" . "</td><td>Dinheiro</td>";

            if ($invest == "Poupança") {
                while ($i <= $rest) {
                    $dim = $dim * 1.05;
                    $formatDim = number_format($dim, 2, ',');
                    echo "<tr>";
                    echo "<td>Investimento no $i" . "°Mês</td><td>$formatDim</td>";
                    echo "</tr>";
                    $i++;
                }
            } else if ($invest == "Renda Fixa") {
                while ($i <= $rest) {
                    $dim = $dim * 1.1;
                    $formatDim = number_format($dim, 2, ',');
                    echo "<tr>";
                    echo "<td>Investimento no $i" . "°Mês</td><td>$formatDim</td>";
                    echo "</tr>";
                    $i++;
                }
            }
?>
    </table>
</body>
</html>