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
    </pre>

    <hr>
    <h3>Variable and Constant definition and print</h3>
    <pre>
        <code>
            echo "Variable result: " . $name;
            echo "<\br>";
            echo "Constant result: " . name;

        </code>
    </pre>

    <h3><i>Results:</i></h3>
       
    <?php 
        //Creating a variable and constant

        $name = "Rogelio, Avilez";
        define("name", "John, Smith");

        echo "Variable result: " . $name;
        echo "<br>";
        echo "Constant result: " . name;
    ?>

    <hr>
    <h3>Able to change Variable but not Constant</h3>
    <pre>
        <code>
            $name = "Alberto, Garza";
            define("name", "Charles, Duke");

            echo "Variable result: " . $name;
            echo "<br>";
            echo "Constant result: " . name;
        </code>
    </pre>

    <h3><i>Results:</i></h3>
       
    <?php 
        //Changing values on a variable and constant

        $name = "Alberto, Garza";

        echo "Variable result: " . $name;
        echo "<br>";
        echo "Constant result: " . name;
        
    ?>
    Duplicate symbol declaration 'name'.intelephense(P1004)
    
</body>
</html>