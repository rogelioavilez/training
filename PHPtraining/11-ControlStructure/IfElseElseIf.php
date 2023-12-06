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

</body>
</html>