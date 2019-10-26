<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data types</title>
    <style>
        td {
            text-align: start;
        }

        table, th, td, tr {
            border: 2px solid black;
        }

        td { 
            vertical-align:top;
        }

    </style>
</head>
<body>


<?php

    
    echo __FILE__ . "<br />" . __LINE__ . "<br />" . __FUNCTION__ . "<br />" . __CLASS__ . "<br />" . PHP_VERSION . "<br />" . PHP_OS . "<br />" . PHP_EOL . "<br />" . TRUE . "<br />" . FALSE . "<br />" . NULL;
    
    define("pi", 3.14, FALSE);
    
    echo "<table>";
    echo "<tr> <th> var_export() </th> <th> var_dump() </th> <th> print_r() </th> </tr>";
    echo "<tr>";
    echo "<td> <pre>";
    echo var_export(get_defined_functions());
    echo "</td> </pre>";

    echo "<td> <pre>";
    echo var_dump(get_defined_functions());
    echo "</td> </pre>";

    echo "<td> <pre>";
    echo print_r(get_defined_functions());
    echo "</td> </pre>";
    echo "</tr> </table>";
?>

    
</body>
</html>