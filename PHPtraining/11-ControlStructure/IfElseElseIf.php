<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If, Else If, Else</title>
</head>
<body>
    <h1>If, Else If, Else</h1>

    <div>
        <h3>Check for Odd or Even numbers and print it using Else If</h3>
        <pre><code>
            $input_number = 10;
            $result = $input_number %2;

            if ( $result ){

                echo "Odd Number";

            } else if (!$result){

                echo "Even Number";

            } 
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $input_number = 10;
            $result = $input_number %2;

            if ( $result ){

                echo "Odd Number";

            } else if (!$result){

                echo "Even Number";

            } 
        ?>
    </div>
    <hr>
    <div>
        <h3>Check if input_number is greater than 10</h3>
        <pre><code>
            
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php

            if ( $input_number > 10 ){

                echo 'Yes, $input_number is Greater than 10';

            } else if ($input_number < 10){

                echo 'No, $input_number is Lower than 10';

            } else {

                echo '$input_number is equal to 10';
                
            }
        ?>
    </div>
    <hr>

</body>
</html>