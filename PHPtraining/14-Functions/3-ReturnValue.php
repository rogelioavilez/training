<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Value</title>
</head>
<body>
    <h1>Return Value</h1>
    <pre>
        * Example:

        function function_name(params) : return type{
            return something;
        }
        
    </pre>
    <hr>

    
    <div>
        <h3>Example 1: return an addition function.</h3>
        <pre><code>
            function add($a, $b): int{

            $addition = $a + $b;

            return $addition;

            }

            echo "Result: " . add(1, 2);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            function add($a, $b): int{

                $addition = $a + $b;

                return $addition;

            }

            echo "Result: " . add(1, 2);
        ?>
    </div>

</body>
</html>