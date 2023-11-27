<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Describe and Display Constants</title>
</head>
<body>
    <h1>Describe and Display Constants</h1>

    <h3>String Constant</h3>
    <pre>
        <code>
            define ("COWORKER_NAME", "Rogelio, Avilez");
            echo "Coworker Name: " . COWORKER_NAME;
        </code>
    </pre>
    <h3><i>Result:</i></h3>
    <?php
        define ("COWORKER_NAME", "Rogelio, Avilez");
        echo "Coworker Name: " . COWORKER_NAME;
    ?>
    <hr>

    <h3>Integer Constant</h3>
    <pre>
        <code>
            define ("COWORKER_ID", 1001);
            echo "Coworker ID: " . COWORKER_ID;
        </code>
    </pre>
    <h3><i>Results:</i></h3>
    <?php
        define ("COWORKER_ID", 1001);
        echo "Coworker ID: " . COWORKER_ID;
    ?>
    <hr>

    <h3>Print Constant From Function</h3>
    <pre>
        <code>
            
        </code>
    </pre>
    <h3><i>Results:</i></h3>
    <?php
        function print_constant(){
                echo "Coworker: " . COWORKER_NAME . " Has ID # " . COWORKER_ID;
        }

        print_constant();
    ?>
    <hr>

    <h3>Display Magic Constant</h3>
    <pre>
        <code>

        </code>
    </pre>
    <h3><i>Results:</i></h3>
    <?php

    ?>
    <hr>
    
</body>
</html>