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
            - Indexed Ascending and Descending Sorting
        * asort() and arsort()
            - Associative Ascending and Descending Sorting
    </pre>
    <hr>

    <!-- Indexed Ascending/Descending Sort -->
    <div>
        <h3>Indexed Ascending/Descending Sort</h3>
        <pre><code>
            $arr = [
                5, 2, 4, 3, 0, 1
            ];
            print_r($arr);
            sort($arr);

            echo "<\br>";
            print_r($arr);
            
            echo "<\br>";
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

    <hr>
    <!-- Associative Ascending/Descending Sort -->
    <div>
        <h3>Indexed Ascending/Descending Sort</h3>
        <pre><code>
            $arr1 = [
                "3" => "John",
                "1" => "Sofia",
                "2" => "Roger"
            ];
            print_r($arr1);
            asort($arr1);

            echo "<\br>";
            print_r($arr1);
            
            echo "<\br>";
            arsort($arr1);
            print_r($arr1);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $arr1 = [
                "3" => "John",
                "1" => "Sofia",
                "2" => "Roger"
            ];
            print_r($arr1);
            asort($arr1);

            echo "<br>";
            print_r($arr1);
            
            echo "<br>";
            arsort($arr1);
            print_r($arr1);

        ?>
    </div>
    
    
</body>
</html>