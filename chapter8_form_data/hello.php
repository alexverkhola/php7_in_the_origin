<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form data</title>
</head>
<body>
    <?php 
        if(!isset($_REQUEST["doGo"])) {
            ?>
            <form action="hello.php">
                Login: <input type="text" name="login" value=""><br>
                Password: <input type="password" name="password" value=""><br>
                <input type="submit" name="doGo" value="Log in">    
            </form>
            <?php
        } else { 
            if ($_REQUEST['login'] == 'root' && $_REQUEST['password'] == '1234') {
                echo "Access allowed for user: " . $_REQUEST["login"];
            } else {
                echo "Access denied";
            }
        }
    ?>
</body>
</html>