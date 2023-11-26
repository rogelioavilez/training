<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concepts</title>
</head>
<body>

    <h1>Variable Concepts</h1>
    <hr>
    <!-- Define a Variable -->
    <h3>Define a variable:</h3>
    <p>
        $name = "Rogelio, Avilez";<br>
        echo $name;<br>
        <i>Result:</i><br>
    </p>
    <br>
    <?php 
    $name = "Rogelio, Avilez";
    echo $name;
    ?>

    <hr>
    <!-- Variable can be used as string and integer -->
    <h3>Variable can be used as String and Integer:</h3>
    <p>
        $message = 1;<br>
        $message = "PHP is the Best!";<br>
        echo $message;<br>
        <i>Result:</i><br>
    </p>
    <br>
    <?php 
    $message = 1;
    $message = "PHP is the Best!";
    echo $message;
    ?>

    <hr>
    <!-- Print Variable with Double Quotes -->
    <h3>Print Variable with Double Quotes:</h3>
    <p>
        echo "Name variable = $name";<br>
        echo 'Name variable = $name';<br>
        <i>Result:</i><br>
    </p>
    <br>
    <?php 
    echo "Name variable = $name" . "<br>";
    echo 'Name variable = $name';
    ?>

<hr>
    <!-- Variable Typing converting the String into Integer and Viceversa -->
    <h3>PVariable Typing converting the String into Integer and Viceversa:</h3>
    <p>
        $lenght = "10";<br>
        $width = 20;<br>
        $area = $lenght * $width;<br>
        echo "Area: $area";<br>
        <i>Result:</i><br>
    </p>
    <br>
    <?php 
        $lenght = "10";
        $width = 20;
        $area = $lenght * $width;
        echo "Area: $area";
    ?>
    
</body>
</html>