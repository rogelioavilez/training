<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables and Constants</title>
</head>
<body>

    <?php
        //Example 1: Quotes turn value into string
        $aboutme = "I'm Rogelio and I love PHP Programming";
        echo "<h1>About Me:</h1>";
        echo $aboutme; //Printing variable value
    ?>

    <hr>

<?php
        //Example 2: Mix variables and text
        $name = "Rogelio, Avilez";
        $message = "This is a String Message.";
        echo $name . ": " . $message ."<br>";
        echo "$name: $message<br>";
        echo "2 different types of input, same result";
    ?>

    <hr>
    
</body>
</html>