<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Global Variables</title>
</head>
<body>
    <h1>Example 1</h1>
    <p>Description</p>

    <?php
        global $message;
        $message = "Welcome to PHP!";

        echo $GLOBALS['message'] . "<br>";
        
    ?>
</body>
</html>