<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort Array</title>
</head>
<body>
    <h1>Sort Array</h1>
    <pre>
        * sort() and rsort()
    </pre>
    <hr>

    <!-- Ascending/Descending Sort -->
    <div>
        <h3>Ascending/Descending Sort</h3>
        <pre><code>
            $arr = [
                5, 2, 4, 3, 0, 1
            ];
            print_r($arr);
            sort($arr);

            echo "<br>";
            print_r($arr);
            
            echo "<br>";
            rsort($arr);
            print_r($arr);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $arr = [
                5, 2, 4, 3, 0, 1
            ];
            print_r($arr);
            sort($arr);

            echo "<br>";
            print_r($arr);
            
            echo "<br>";
            rsort($arr);
            print_r($arr);

        ?>
    </div>
    
    
</body>
</html>