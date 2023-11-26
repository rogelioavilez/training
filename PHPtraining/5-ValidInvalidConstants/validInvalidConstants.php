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
            define (LANGUAGE, "PHP");
            define (VERSION, 7.3);

            echo "Language" . LANGUAGE . "Version: " . VERSION;
        </code>
    </pre>

    <?php
    
        define ("LANGUAGE", "PHP");
        define ("VERSION", 7.3);

        echo LANGUAGE . VERSION;

        echo "Test";

    ?>
    
</body>
</html>