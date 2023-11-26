<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Variables</title>
</head>
<body>

    <h1>Example 1</h1>
    <p>Variables defined inside a function and outside</p>
    <?php

        $name = "Rogelio";

        function print_name(){
            $name = "PHP<br>";
            echo $name;
        }

        print_name();
        echo $name;
        
    ?>
    
</body>
</html>