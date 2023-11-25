<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Vs Double Quotes</title>
</head>
<body>
    
    <?php
        $message = "This is PHP Language";

        echo "Printing the message variable using double quotes: $message <br>";

        echo 'Printing the message variable using single quotes: $message';

        $message2 = "PHP Prints this message faster";
        
        echo "$message2" . '$message2';
    ?>

</body>
</html>