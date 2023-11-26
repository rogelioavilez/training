<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valid Invalid Constants</title>
</head>
<body>
    <h1>Valid Invalid Constants</h1>
    <h3>Good Practice 1:</h3>
    <p>Always use UPPERCASE to define constants.</p>

    <pre>
        <code>
            define ("LANGUAGE", "PHP");
            define ("VERSION", 7.3);

            echo "Language" . LANGUAGE . "Version: " . VERSION;
        </code>
    </pre>
    <h3><i>Results:</i></h3>
    <?php
    
        define ("LANGUAGE", "PHP");
        define ("VERSION", 7.3);

        echo "Language: " . LANGUAGE . "Version: " . VERSION;

    ?>

    <hr>
    <h3>Good Practice 2:</h3>
    <p>Do not use Constants like __CONSTANTS__</p>

    <pre>
        <code>
            define ("__CONSTANTS__", "Wrong Practice");

            echo __CONSTANTS__;
        </code>
    </pre>
    <h3><i>Results:</i></h3>
    <?php
    
        define ("__CONSTANTS__", "Wrong Practice");

        echo __CONSTANTS__;

    ?>

    <hr>
    <h3>Good Practice 2:</h3>
    <p>Avoid use same name as Variables, it may get confusing</p>

    <pre>
        <code>
            $name = "Alberto, Garza";
            define ("NAME", "Rogelio, Avilez");

            echo "Variable Value: " . $name;
            echo "Constant Value: " . NAME;
        </code>
    </pre>
    <h3><i>Results:</i></h3>
    <?php

        $name = "Alberto, Garza";
        define ("NAME", "Rogelio, Avilez");

        echo "Variable Value: " . $name;
        echo "Constant Value: " . NAME;

    ?>
    
</body>
</html>