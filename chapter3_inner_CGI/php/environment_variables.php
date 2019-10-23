<!DOCTYPE html>

<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>Вывод переменных окружения</title>
    <style>
      body {
        background-color:lightgrey;
      }

      form {
        text-align: center;
      }

      input {
        height: 50px;
        width: 150px;
        border-radius: 15px;
        border-color: black;
      }
    </style>
  </head>

  <body>
    <form method="GET" action="index.php">
      <input type="submit" name="button" value="Send query string">
    </form>

    <?php      
      echo "<p>HTTP-ACCEPT: " . getenv("HTTP_ACCEPT") . '</p>'; 
      echo "<p>HTTP_REFERER : " . getenv("HTTP_REFERER");
      echo "<p>HTTP_USER_AGENT : " . getenv("HTTP_USER_AGENT");
      echo "<p>HTTP_HOST : " . getenv("HTTP_HOST");
      echo "<p>SERVER_PORT : " . getenv("SERVER_PORT");
      echo "<p>REMOTE_ADDR : " . getenv("REMOTE_ADDR");
      echo "<p>REMOTE_PORT : " . getenv("REMOTE_PORT");
      echo "<p>SCRIPT_NAME : " . getenv("SCRIPT_NAME");
      echo "<p>REQUEST_METHOD : " . getenv("REQUEST_METHOD");
      echo "<p>QUERY_STRING : " . getenv("QUERY_STRING");
    ?>

  </body>
</html>