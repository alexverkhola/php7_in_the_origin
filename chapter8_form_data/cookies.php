<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
</head>
<body>
    <?php
        $count = 0;

        if(isset($_COOKIE["count"])) $count = $_COOKIE["count"];
        $count++;

        setcookie("count", $count);

        echo $count;

    ?>
</body>
</html>