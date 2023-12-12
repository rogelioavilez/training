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
        * 
    </pre>
    <hr>

    <!-- Example 1 -->
    <div>
        <h3>Unset Array</h3>
        <pre><code>
            $arr = [1, 2, 3, 4, 5];

            print_r($arr);

            unset($arr[4]);

            echo "<br>";
            print_r($arr);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $arr = [1, 2, 3, 4, 5];

            print_r($arr);

            unset($arr[4]);

            echo "<br>";
            print_r($arr);
        ?>
    </div>
    
    
</body>
</html>