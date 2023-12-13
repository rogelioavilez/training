<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Function Calling</title>
</head>
<body>
    <h1>Dynamic Function Calling</h1>
    <pre>
        * As long as parrameters are set in the name of a function, even if it was set as String this will be Dynamically called.
    </pre>
    <!-- Example 1 -->
    <hr>
    <div>
        <h3>Example 1:</h3>
        <pre><code>
            function add($a, $b): int{
                return $a + $b;
            }

            $addFunction = "add";
            
            //Returns value as String
            echo $addFunction;

            //Returns value as function result
            echo $addFunction(3, 5);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            function add($a, $b): int{
                return $a + $b;
            }

            $addFunction = "add";

            //Returns value as String
            echo $addFunction;

            //Returns value as function result
            echo $addFunction(3, 5);
        ?>
    </div>


</body>
</html>