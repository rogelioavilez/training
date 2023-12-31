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
        * When String is Unset, or NULL, this shows 0 as value, no String lenght found.
        * Blank spaces are counted as part of the String Lenght.
    </pre>
    <hr>
    <div>
        <h3>Example 1:</h3>
        <p>
            Get String Lenght on variable $name1.
        </p>
        <pre><code>
        $name1 = "Rogelio Avilez";
            $name3 = null;
            //Set Variable example
            echo strlen($name1);

            echo "<\br>";

            //UnSet Variable example
            echo strlen($name2);

            echo "<\br>";

            //NULL Variable example
            echo strlen($name3);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $name1 = "Rogelio Avilez";
            $name3 = null;
            //Set Variable example
            echo strlen($name1);

            echo "<br>";

            //UnSet Variable example
            echo strlen($name2);

            echo "<br>";

            //NULL Variable example creates an error
            // echo strlen($name3);
        ?>
    </div>

    <hr>
    <div>
        <h3>Example 2:</h3>
        <p>
            Use strlen for a condition.
        </p>
        <pre><code>
            $name = "Something";

            if (strlen($name) > 0){
                echo $name;
            } else {
                echo "$name is Empty";
            }
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $name = "Something";

            if (strlen($name) > 0){
                echo $name;
            } else {
                echo "$name is Empty";
            }
        ?>
    </div>
    
</body>
</html>