<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Typing</title>
</head>
<body>

    <h1>Example 1</h1>
    <p>Using Integers for an equation</p>

    <?php
        $length = 10;
        $width = 20;
        $area = $length * $width;
        echo "$length * $width<br>Area: $area"; 
    ?>

    <hr>

    <h1>Example 2</h1>
    <p>Using String and Integer for an equation, PHP changes it to integer</p>

    <?php
        $length = "10";
        $width = 20;
        $area = $length * $width;
        echo "$length * $width<br>Area: $area"; 
    ?>
    
</body>
</html>