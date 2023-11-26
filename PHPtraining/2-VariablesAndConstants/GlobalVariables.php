<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Variables</title>
</head>
<body>
    <h1>Example 1</h1>
    <p>Defining a global variable.</p>

    <?php
        //Defining a global variable
        global $name;
        $name = "Rogelio";

        function print_name(){
            //Global Variable cannot access function
            $name = "PHP";
            echo "Echo inside function: " . $name;
        }

        print_name();
        echo "<br>Echo outside function: " . $name;
    ?>
    
</body>
</html>