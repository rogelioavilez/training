<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop</title>
</head>
<body>
    <h1>While Loops</h1>
    <pre>
    while (Condition) {
            ** Code to be executed **
        }
    </pre>
    <hr>
    <div>
        <h3>Print Even numbers from 1 to 10</h3>
        <pre><code>
            $value = 1;
            while ($value <=10){

                $result = $value %2;

                if ($result > 0){
                    echo "Even Number " . $value;
                    $value++;
                } else {
                    $value++;
                }
                
            }
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $value = 1;
            while ($value <=10){

                $result = $value %2;

                if ($result > 0){
                    echo "Even Number " . $value;
                    $value++;
                } else {
                    $value++;
                }

            }
        ?>
    </div>
    
</body>
</html>