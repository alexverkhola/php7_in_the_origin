<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IP address</title>
</head>
<body>
    <p>Your IP address: <?=$_SERVER["REMOTE_ADDR"]?></p>
    <p>Your browser: <?=$_SERVER["HTTP_USER_AGENT"]?></p>
</body>
</html>