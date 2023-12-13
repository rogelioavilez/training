<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finally Block</title>
</head>
<body>
    <h1>Finally Block</h1>
    <pre>
        * Finally block will always get excecuted, this will take place before the exceptions get thrown
    </pre>

    <!-- Raise and Exception and Finally Block -->
    <hr>
    <div>
        <h3>Raise and Exception and Finally Block</h3>
        <pre><code>
            function custom_exception($except){
                echo 'Caught Exception: ' . $except->getMessage();
            }

            set_exception_handler("custom_exception");

            try{
                throw new Exception("Exception Raised!");
            } finally{
                echo "This line gets excecuted before Exception Always! - ";
            }
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            function custom_exception($except){
                echo 'Caught Exception: ' . $except->getMessage();
            }

            set_exception_handler("custom_exception");

            try{
                throw new Exception("Exception Raised!");
            } finally{
                echo "This line gets excecuted before Exception Always! - ";
            }
        ?>
    </div>
    
</body>
</html>