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
    <!-- Example 1 -->
    <hr>
    <div>
        <h3>Example 1: return an Integer in an addition function.</h3>
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

    <!-- Example 2 -->
    <hr>
    <div>
        <h3>Example 2: .</h3>
        <pre><code>
            function getEvenNumbers($limit): array{

            $returnArr = [];

            for($index = 0; $index <= $limit; $index++) {

                if($index%2==0) {

                    $returnArr[] = $index;

                }

            }

            return $returnArr;

            }

            $evenNumbers = getEvenNumbers(20);

            print_r($evenNumbers);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            function getEvenNumbers($limit): array{

                $returnArr = [];
                
                for($index = 0; $index <= $limit; $index++) {

                    if($index%2==0) {

                        $returnArr[] = $index;

                    }

                }

                return $returnArr;

            }

            $evenNumbers = getEvenNumbers(20);

            print_r($evenNumbers);
        ?>
    </div>

</body>
</html>