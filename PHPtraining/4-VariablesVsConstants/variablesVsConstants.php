<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Vs Constants</title>
</head>
<body>

    <h1>Variables Vs Constants</h1>

    <h3>Constants characteristics</h3>
    <pre>
        
            1) No need to use $ to use constant
            2) Constant are defined only via define method
            3) Value can be assigned only once
            4) Constant has global scope. Can access anywhere.
            5) Constant can be used to access the constants
    <hr>
        <code>
            echo "Variable result: " . $name;
            echo "Constant result: " . name;

        </code>
    </pre>

    <h3><i>Results:</i></h3>
       
    <?php 
        //define ( NAME OF THE CONSTANT, VALUE OF THE CONSTANT);

        $name = "Rogelio, Avilez";
        define("name", "John, Smith");

        echo "Variable result: " . $name;
        echo "Constant result: " . name;
        
    ?>
    
</body>
</html>