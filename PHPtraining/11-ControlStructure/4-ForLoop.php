<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
</head>
<body>
    <h1>For Loops</h1>
    <pre>
    for (Inialization; Condition; Increment) {
            ** Code to be executed **
        }
    </pre>
        
    <hr>
    <div>
        <h3>Print all numbers from 1 to 10</h3>
        <pre><code>
        for($value = 1; $value <=10; $value ++){

            $result = $value %2;

            if ($result > 0){
                echo "Odd Number " . $value . "<\br>";
            } else {
                echo "Even number " . $value . "<\br>";
            }
            
        }
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php 
            for($value = 1; $value <=10; $value ++){

                $result = $value %2;

                if ($result > 0){
                    echo "Odd Number " . $value . "<br>";
                } else {
                    echo "Even number " . $value . "<br>";
                }
            }
        ?>
    </div>
    
</body>
</html>