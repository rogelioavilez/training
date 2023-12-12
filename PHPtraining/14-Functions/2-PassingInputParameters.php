<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing Input Parameters</title>
</head>
<body>
    <h1>Passing Input Parameters</h1>
    <pre>
        * Example:

        
    </pre>
    <hr>

    
    <div>
        <h3>Passing Input Parameters</h3>
        <pre><code>

        declare(strict_types=1);

        //define function
            function printOddNumbers(int $limit, $skipNumber){

                for($index = 0; $index <=$limit; $index++){

                    if($index == $skipNumber){
                        continue;
                    }

                    if($index%2!=0){
                        echo "Odd Number: $index";
                    }

                }

            }

        //Call the function
            printOddNumbers(20, "3");
            
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            declare(strict_types = 1);

        //define function
            function printOddNumbers(int $limit, $skipNumber){

                for($index = 0; $index <= $limit; $index++){

                    if($index == $skipNumber){
                        continue;
                    }

                    if($index%2!=0){
                        echo "Odd Number: $index <br>";
                    }

                }

            }

        //Call the function
            printOddNumbers(20, "3");
        ?>
    </div>

</body>
</html>