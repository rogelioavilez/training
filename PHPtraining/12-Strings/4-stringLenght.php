<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Lenght</title>
</head>
<body>
    <h1>String Lenght</h1>
    <pre>
        * Get the String Lenght of Variable requested.
        * When String is Unset, this shows 0 as value, no String lenght found.
        * Blank spaces are counted as part of the String Lenght.
    </pre>
    <hr>
    <h3>Example 1:</h3>
    <p>
        Get String Lenght on variable $name1.
    </p>
    <pre><code>
        $name1 = "Rogelio Avilez";
        //Set Variable example
        echo strlen($name1);

        echo "<\br>";
        
        //UnSet Variable example
        echo strlen($name2);
    </code></pre>
    <h3><i>Result:</i></h3>
    <?php
        $name1 = "Rogelio Avilez";
        //Set Variable example
        echo strlen($name1);

        echo "<br>";

        //UnSet Variable example
        echo strlen($name2);
    ?>
</body>
</html>