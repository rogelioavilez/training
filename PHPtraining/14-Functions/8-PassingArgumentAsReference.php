<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing Argument as Reference</title>
</head>
<body>
    <h1>Passing Arguments as Reference</h1>
    <pre>
        * 
    </pre>
    <!-- Assign Output of Function into a Variable -->
    <hr>
    <div>
        <h3>Example 1: Assign Output of Function into a Variable</h3>
        <pre><code>
            $result = 0;

            function add($a, $b):int{
                $addition = $a + $b;
                return $addition;
            }

            echo $result . "<\br>";

            $result = add(1,2);
            echo $result;
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $result = 0;

            function add($a, $b):int{
                $addition = $a + $b;
                return $addition;
            }

            echo $result . "<br>";

            $result = add(1,2);
            echo $result;
        ?>
    </div>

    <!-- Change variable value globally after passed through function -->
    <hr>
    <div>
        <h3>Example 2: Change variable value globally after passed through function</h3>
        <pre><code>
            $result2 = 0;

            function add2($a, $b, &$result2 = null){
                $result2 = $a + $b;
            }

            echo $result2 . "<\br>";

            //After function changed variable value
            add2(1, 2, $result2);
            echo $result2 . "<\br>";

            //After passed through function
            echo $result2;
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $result2 = 0;

            function add2($c, $d, &$result2 = null){
                $result2 = $c + $d;
            }

            echo $result2 . "<br>";

            //After function changed variable value
            add2(1, 2, $result2);
            echo $result2 . "<br>";

            //After passed through function
            echo $result2;
        ?>
    </div>

</body>
</html>