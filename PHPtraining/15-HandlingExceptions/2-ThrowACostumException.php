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
    
</body>
</html>