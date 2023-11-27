<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <h1>Test</h1>

    <h3>1) Define and Assign $firstname and $lastname variable with your name.</h3>

    <pre>
        <code>
            $firstname = "Rogelio";
            $lastname = "Avilez Garza";
        </code>
    </pre>
    <?php
        $firstname = "Rogelio";
        $lastname = "Avilez Garza";
    ?>
    <hr>

    <h3>2) Print the $firstname and $lastname using echo/print.</h3>

    <pre>
        <code>
            echo "My Full Name is: " . $firstname . " " . $lastname . "<\br>";
            print "My Full Name is: " . $firstname . " " . $lastname;
        </code>
    </pre>
    <h3>Result:</h3>
    <?php
        echo "My Full Name is: " . $firstname . " " . $lastname . "<br>";
        print "My Full Name is: " . $firstname . " " . $lastname;
    ?>
    
</body>
</html>