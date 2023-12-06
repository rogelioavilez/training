<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break Statement</title>
</head>
<body>
    <h1>Break Statement</h1>
    <pre>
        In order to break an Infinite loop, use "Control" Key plus "C" key while in process using command/terminal.

        Or Add a BREAK line in a conditional PHP.
    </pre>

    <div>
        <h3>Example 1:</h3>
        <pre><code>
            do{
                echo $value;

                    if($value >= 10){
                        break; //Use Break line to break infinite loops in php
                    }

                $value++;
            } while (true);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            do{
                echo $value;

                    if($value >= 10){
                        break; //Use Break line to break infinite loops in php
                    }

                $value++;
            } while (true);
        ?>
    </div>
    <hr>
    <div>
        <h3>Example 2: Break Multiple Loop</h3>
        <pre><code>
            $loop1 = 1;
            $loop2 = 1;
            $loop3 = 1;

            for ( ; $loop1; $loop1++){

                while ($loop2 <= 10){

                    do{
                        if($loop3 == 5){
                            break;
                        }
    
                        echo "Loop 3: " . $loop3 . "<\br>";
                        $loop3++;
        
                    } while($loop3 <= 10);

                    if($loop2 == 6){
                        break;
                    }

                    echo "Loop 2: " . $loop2 . "<\br>";
                    $loop2++;
                }

                if($loop1 == 7){
                    break;
                }
                echo "Loop 1: " . $loop1 . "<\br>";
            }
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php

            $loop1 = 1;
            $loop2 = 1;
            $loop3 = 1;

            for ( ; $loop1; $loop1++){

                while ($loop2 <= 10){

                    do{
                        if($loop3 == 5){
                            break;
                        }
    
                        echo "Loop 3: " . $loop3 . "<br>";
                        $loop3++;
        
                    } while($loop3 <= 10);

                    if($loop2 == 6){
                        break;
                    }

                    echo "Loop 2: " . $loop2 . "<br>";
                    $loop2++;
                }

                if($loop1 == 7){
                    break;
                }
                echo "Loop 1: " . $loop1 . "<br>";
            }
        ?>
    </div>
    
</body>
</html>