<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<body>
    <h1>Constants</h1>
    <pre>
        <code>
            define("LANGUAGE", "PHP");
            $lang = LANGUAGE;

            echo"This Programm is written using $lang ";
            echo"This Programm is written using LANGUAGE ";
            echo"This Programm is written using " . LANGUAGE;
        </code>
    </pre>
       
    <?php 
        //define ( NAME OF THE CONSTANT, VALUE OF THE CONSTANT);

        define("LANGUAGE", "PHP");
        $lang = LANGUAGE;

        echo"This Programm is written using $lang <br>";
        echo"This Programm is written using LANGUAGE <br>";
        echo"This Programm is written using " . LANGUAGE . "<br>";
    ?>
    
</body>
</html>