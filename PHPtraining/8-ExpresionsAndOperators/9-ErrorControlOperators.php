<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Control Operators</title>
</head>
<body>
    <h1>Error Control Operators</h1>

    <div>
        <h3>Raise and Supress the error</h3>
        <p></p>
        <pre><code>
            echo "Hello1";
            @$value = 1/0; //This line is an error and will not preceed

            echo "Hello2";

            echo $php_errormsg;
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            echo "Hello1";
            //This line is an error and will not preceed
            @$value = 1/0;

            echo "Hello2";

            echo $php_errormsg;
        ?>
    </div>
</body>
</html>