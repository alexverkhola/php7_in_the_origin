<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Простейший PHP сценарий</title>
</head>
<body>
    <h1>Здравствуйте!</h1>
    <?php
        $dat = date("d.m Y");

        $time = date("h:i:s");

        echo "Сегодня $dat года <br />";
        echo "Сейчас $time <br />";

        echo "Квадраты и кубы первых пяти натуральных чисел : <br />";

        echo "<ul> \n";

        for($i = 1; $i <= 9; $i++) {
            echo "<li> $i в квадрате = " . ($i * $i);
            echo ", $i в кубе =  " . ($i * $i * $i) . "</li>"; 
        }

        echo "</ul>";
    ?>
</body>
</html>