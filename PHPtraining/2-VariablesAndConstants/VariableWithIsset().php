<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable with isset()</title>
</head>
<body>
    <h1>Variable with isset()</h1>
    <br>
    <h2>Example 1</h2>
    <p>We got an Empty variable</p>

    <?php
        //Empty Variable
        $name;
        echo $name;

        //Ternary Operator
        echo isset($name) ? "Variable Set" : "Variable Is Not Set";
    
    ?>
    <br>
    <h2>Example 2</h2>
    <p>We got an variable set</p>

    <?php
        $name = "Rogelio";
        echo isset($name) ? "Variable Set: " . $name : "Variable Is Not Set";
    ?>


</body>
</html>