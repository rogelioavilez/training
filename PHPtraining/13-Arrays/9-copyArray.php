<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copy Array</title>
</head>
<body>
    <h1>Copy Array</h1>
    <pre>
        * Just assign the value of one Array into a new Array assignment.

    </pre>
    <hr>

    <!-- Copy Array from one variable to Other -->
    <div>
        <h3>Example 1: Copy Array from one variable to Other</h3>
        <pre><code>
            $arr = [0,1,2,3,4,5];

            $arr1 = $arr;

            var_dump($arr1);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $arr = [0,1,2,3,4,5];

            $arr1 = $arr;

            var_dump($arr1);
        ?>
    </div>

    <hr>
    <!-- Copy Array using foreach -->
    <div>
        <h3>Example 2: Copy Array using foreach</h3>
        <pre><code>
            foreach($arr as $values){
                $arr2[] = $values;
            }
            var_dump($arr2);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            foreach($arr as $values){
                $arr2[] = $values;
            }
            var_dump($arr2);
        ?>
    </div>

    <hr>
    <!-- Copy Associative Array -->
    <div>
        <h3>Example 3: Copy Associative Array</h3>
        <pre><code>
            
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $arr3 = [
                "3" => "John",
                "1" => "Ana",
                "2" => "Roger"
            ];
            $arr4 = $arr3;
            var_dump($arr4);
        ?>
    </div>

</body>
</html>