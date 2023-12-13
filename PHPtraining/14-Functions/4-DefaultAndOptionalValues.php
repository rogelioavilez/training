<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default and Optional Values</title>
</head>
<body>
    <h1>Default and Optional Values</h1>
    <pre>
        * Example:

        function function_name(Default_Param_comes_first, Optional_Param_goes_last){
            return: Something;
        }

        If optional Parameters are not mentioned it doesn't affect, but id Default parameters are not mention, this will cause an error.

        
    </pre>
    <!-- Example 1 -->
    <hr>
    <div>
        <h3>Example 1: Assign Defaul and Optional Values to a function.</h3>
        <pre><code>
            //declare(strict_types=1);

            function printOddNumbers(int $limit, $skipnumber = -1){

                for ($index=0; $index <= $limit; $index++){

                    if($skipnumber == $index){
                        continue;
                    }
                    if($index%2!=0){
                        echo "Odd Number: $index";
                    }

                }

            }

            printOddNumbers(30);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            //declare(strict_types=1);

            function printOddNumbers(int $limit, $skipnumber = -1){

                for ($index=0; $index <= $limit; $index++){

                    if($skipnumber == $index){
                        continue;
                    }
                    if($index%2!=0){
                        echo "Odd Number: $index<br>";
                    }

                }

            }

            printOddNumbers(30);
        ?>
    </div>


</body>
</html>