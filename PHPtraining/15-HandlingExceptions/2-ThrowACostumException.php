<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Throw a costum Exception</title>
</head>
<body>
    <h1>Throw a costum Exception</h1>

    <!-- Set Exception handler -->
    <hr>
    <div>
        <h3>Set Exception handler</h3>
        <pre><code>
            function custom_exception_handler($exception){
                echo 'Caught Exception: ' . $exception->getMessage();
            }            

            set_exception_handler('custom_exception_handler');

            throw new Exception ("Exception is raised!");
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            function custom_exception_handler($exception){
                echo 'Caught Exception: ' . $exception->getMessage();
            }            

            set_exception_handler('custom_exception_handler');

            throw new Exception ("Exception is raised!");
        ?>
    </div>

        <!-- Raise-Catch a divide by Zero Error -->
        <hr>
    <div>
        <h3>Raise-Catch a divide by Zero Error</h3>
        <pre><code>

        </code></pre>
        <h3><i>Result:</i></h3>
        <?php

            function custom_exception_handler2($exception2){
                echo 'Caught Exception: ' . $exception2->getMessage();
            }   
            function divide($x, $y):int{
                if($y <=0){
                    throw new Exception("Divide by Zero Exception might happen");
                }

                $result = $x/$y;
                return $result;
            }   
            
            set_exception_handler('custom_exception_handler2');
            divide(2,0);
        ?>
    </div>

    

</body>
</html>