<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables and Constants</title>
</head>
<body>
    <h1>Example 1: Quotes turn value into string</h1>
    <?php
        //Example 1: Quotes turn value into string
        $aboutme = "I'm Rogelio and I love PHP Programming";
        echo "<h2>About Me:</h2>";
        echo $aboutme; //Printing variable value
    ?>

    <hr>
    <h1>Example 2: Mix variables and String</h1>
    <?php
        //Example 2: Mix variables and String
        $name = "Rogelio, Avilez";
        $message = "This is a String Message.";
        echo $name . ": " . $message ."<br>";
        echo "$name: $message<br>";
        echo "2 different types of input, same result";
    ?>

    <hr>
    <h1>Example 3: Mix String and Integer</h1>
    <?php
        //Example 3: Mix String and Integer
            //Define Integer and Strin Values
            $version = 7.3;
            $language = "PHP";

        //Mix String and Integer in one line
        echo $language . " version is: " . $version;
    ?>

    <hr>
    <h1>Example 4: Create Equations - Adding</h1>
    <?php
        //Example 4: Create equations
            //Define Integer and Strin Values
            $firstvalue = 10;
            $secondvalue = 20;
            $total = $firstvalue + $secondvalue;

        //Mix String and Integer in one line
        echo $firstvalue . " + " . $secondvalue . " =<br>";
        echo "Total: " . $total;
    ?>

    <hr>
    
</body>
</html>