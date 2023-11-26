<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Variables</title>
</head>
<body>
    <h1>Example 1</h1>
    <p>Description</p>

    <?php
        //Male is a variale
        $male = "Rogelio, Avilez";
        //Male is holding a variable name
        $gender = "male";

        echo $gender;
        echo $$gender; //$($gender) ==> $(male)
    ?>
</body>
</html>