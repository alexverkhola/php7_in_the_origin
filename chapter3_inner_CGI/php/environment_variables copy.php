<!DOCTYPE html>

<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>Вывод переменных окружения</title>
    <style>
      body {
        background-color:lightgrey;
      }

      div{
        text-align: center;
      }

      form {
        display: inline;
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
    <div class="forms">
      <form method="GET" action="environment_variables.php">
        <input type="submit" name="button" value="Send GET request">
      </form>
      <form method="POST" action="environment_variables.php?variable=value">
        <input type="submit" name="button" value="Send POST request">
      </form>
    </div>

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
      echo "<p>CONTENT_LENGTH : " . getenv("CONTENT_LENGTH");
    ?>

  </body>
</html>