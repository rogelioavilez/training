<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Define And Call A Function</title>
</head>
<body>
    <h1>Define And Call A Function</h1>
    <pre>
        * Basic Syntax on how to write a function on PHP

        function function_name(param1, .... , param_m)
        {
            statement_1;
            statement_2;
            ......
            statement_m;

            return return_value;
        }
    </pre>
    <hr>

    
    <div>
        <h3>Define and Call the function</h3>
        <pre><code>
            // Define a function

                function printEvenNumbers($limit){
                    for($index = 0; $index <= $limit; $index++){
                        if($index%2 == 0){
                            echo "Even Number: $index";
                        }
                    }
                }

            //Call the function

                printEvenNumbers(20);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php

        // Define a function

            function printEvenNumbers($limit){
                for($index = 0; $index <= $limit; $index++){
                    if($index%2 == 0){
                        echo "Even Number: $index";
                    }
                }
            }

        //Call the function

            printEvenNumbers(20);
        ?>
    </div>

</body>
</html>