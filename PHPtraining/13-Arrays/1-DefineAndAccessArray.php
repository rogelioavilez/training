<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Defina and Access Array</title>
</head>
<body>
    <h1>Defina and Access Array</h1>
    <pre>
        * An Array is actually an ordered map. A map is  a type that associates values to keys.
    </pre>
    <hr>

    <!-- Example 1 -->
    <h3>Learn how to define and use Array</h3>
    <pre>
        - Define an Array
    </pre>
    <pre><code>
        //This was the old version of creating arrays:

        $old_array = array("old food", "old drinks");
        var_dump($old_array);

        echo "<br>";

        //After PHP 5.4 you can replace array {} with []

        $string_array = [
            "food", "drinks"
        ];

        var_dump($string_array);
    </code></pre>
    <h3><i>Result:</i></h3>
    <?php
        /* 
        This was the old version of creating arrays:

        */

        $old_array = array("old food", "old drinks");
        var_dump($old_array);

        echo "<br>";

        //After PHP 5.4 you can replace array {} with []

        $string_array = [
            "food", "drinks"
        ];

        var_dump($string_array);
    ?>
    
</body>
</html>