<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Form</title>
</head>
<body>
    <form action="">
        <select name="Choice[]" id="" multiple>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select><br/>
        <input type="hidden" name="Data[city]" value="empty">
        <input type="radio" name="Data[city]" value="New Yourk">New Yourk<br/>
        <input type="radio" name="Data[city]" value="New Jersy">New Jersy<br/>
        <input type="radio" name="Data[city]" value="New Orlean">New Orlean<br/>
        <input type="submit" name="doGo" value="Send">
    </form>
    <?php
        
        print_r($_REQUEST);
        echo "<p></p>";
        echo $_REQUEST["Data"]["city"];
    
    
    ?>
</body>
</html>