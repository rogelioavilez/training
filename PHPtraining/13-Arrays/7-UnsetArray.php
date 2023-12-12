<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unset Array</title>
</head>
<body>
    <h1>Unset Array</h1>
    <pre>
        * Used to delete and Specific index from Array
    </pre>
    <hr>

    <!-- Example 1 -->
    <div>
        <h3>Unset Array</h3>
        <pre><code>
            $arr = [1, 2, 3, 4, 5];

            print_r($arr);

            unset($arr[4]);

            echo "<\br>";
            print_r($arr);

            //Index 4 is not used automatically, new item is added on the next index
            
            $arr[] = 5;
            echo "<\br>";
            print_r($arr);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $arr = [1, 2, 3, 4, 5];

            print_r($arr);

            unset($arr[4]);

            echo "<br>";
            print_r($arr);

            //Index 4 is not used automatically, new item is added on the next index
            $arr[] = 5;
            echo "<br>";
            print_r($arr);
        ?>
    </div>
    
    
</body>
</html>