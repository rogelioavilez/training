<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<body>
    <h1>Constants</h1>

    <h3>Defining a constant and multiple ways to get result</h3>
    <pre>
        <code>
            define("LANGUAGE", "PHP");
            $lang = LANGUAGE;

            echo"This Programm is written using $lang ";
            echo"This Programm is written using LANGUAGE ";
            echo"This Programm is written using " . LANGUAGE;
        </code>
    </pre>

    <h3><i>Results:</i></h3>
       
    <?php 
        //define ( NAME OF THE CONSTANT, VALUE OF THE CONSTANT);

        define("LANGUAGE", "PHP");
        $lang = LANGUAGE;

        echo"This Programm is written using $lang <br>";
        echo"This Programm is written using LANGUAGE <br>";
        echo"This Programm is written using " . LANGUAGE . "<br>";
    ?>

    <hr>

    <h3>Cannot start a Constant with an integer or will show an error</h3>
    <pre>
        <code>
            Mistake:
            define ("1VERSION", 7.3);
            echo 1VERSION;

            Correct:
            define ("VERSION", 7.3);
            echo VERSION;
        </code>
    </pre>

    <h3><i>Results:</i></h3>

    <p>Unexpected 'Name'. Expected ','.</p>
       
    <?php 
        //Do not start with Integer or will show error;
        define ("VERSION", 7.3);
        echo VERSION;

    ?>
    
</body>
</html>