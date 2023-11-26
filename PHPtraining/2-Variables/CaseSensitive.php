<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Sensitive</title>
</head>
<body>

    <?php
        //Not everything is case sensitive.
        echo 'Hello World';
        ECHO 'Hello World';

        PRINT 'Hello';

        //Variables as Case Sensitive
        $name = 'PHP';
        $Name = 'Rogelio';

        echo "Name value is: $name and $Name";

        //Functions are not case senstitive and that is the reason it cannot be duplicated even when lower or upper case is in use.
        function print_message(){
            echo 'Hello and Welcome to PHP!';
        }

        PRINT_MESSAGE();

    ?>
    
</body>
</html>