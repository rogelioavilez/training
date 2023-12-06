<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While Loop</title>
</head>
<body>
    <h1>Do While Loops</h1>
    <pre>
        do{
            ** Code to be executed **
        } 
        while (Condition);
    </pre>
    <hr>
    <div>
        <h3>Print Square of a number maximum until 100 using Do While Loop</h3>
        <pre><code>
            $max_value = 100;
            $value1 = 2;

            do{
                echo "Square: " . $value1 . PHP_EOL;
                $value1 *= 2;
            } 
            while ($value1 <= $max_value);
            
            //Dont forget semicolon after While Condition
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php

            $max_value = 100;
            $value1 = 2;

            do{
                echo "Square: " . $value1 . PHP_EOL;
                $value1 *= 2;
            } 
            while ($value1 <= $max_value);
            //Dont forget semicolon after While Condition
        ?>
    </div>
    
</body>
</html>