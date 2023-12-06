<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continue</title>
</head>
<body>
    <h1>Continue</h1>
    <pre>
        * Continue will skip the next line and go to next loop.
    </pre>
    <hr>
    <h3>Example 1: Print only Even Numbers in result</h3>
    <pre><code>
        $value1 = 1;
        while (true){
            $result = $value1 % 2;

            if($result ==1){
                continue;
            }

            if ($value1 > 10){
                break;
            }

            echo "Even Numbers: " . $value1 . "<\br>";

            $value1++;
        }
    </code></pre>
    <h3><i>Result:</i></h3>
    <?php
        $value1 = 1;
        while (true){
            $result = $value1 %2;

            if($result == 1){
                continue;
            }

            if ($value1 > 10){
                break;
            }

            echo "Even Numbers: " . $value1 . "<br>";

            $value1++;
        }
    ?>
    
</body>
</html>