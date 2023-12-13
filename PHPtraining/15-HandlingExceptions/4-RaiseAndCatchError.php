<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raise and Catch Error</title>
</head>
<body>
    <h1>Raise and Catch Error</h1>

    <!-- Raise and Catch Error -->
    <hr>
    <div>
        <h3>Raise and Catch Error</h3>
        <pre><code>
            function custom_error($errno, $errstr){
                echo $errstr;
            }

            set_error_handler('custom_error');
            echo (5 / 0);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            function custom_error($errno, $errstr){
                echo $errstr;
            }

            set_error_handler("custom_error");
            echo (5 / 0);
        ?>
    </div>
    
</body>
</html>