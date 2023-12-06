<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go To</title>
</head>
<body>
    <h1>Go To</h1>
    <p>* Create a label to jump to</p>

    <div>
        <h3>Example 1</h3>
        <pre><code>
            $inputValue = 0;
            if ($inputValue <=0){
                goto error_block;
            }

            exit();

            error_block:
                echo "This is an Error Block and will excecute anyway";
        </code></pre>

        <h3><i>Result:</i></h3>

        <?php

            $inputValue = 0;
            if ($inputValue <=0){
                goto error_block;
            }

            exit();

            error_block:
                echo "This is an Error Block and will excecute anyway";
        ?>

    </div>
    <hr>
    
    <div>
        <h3>Example 2</h3>
        <pre><code>
            
        </code></pre>

        <h3><i>Result:</i></h3>

        <?php
            for($count = 0; $count <=10; $count++ ){

                if($count == 2){
                    goto loop2;
                }

            }

            loop2:
                echo "Counter value is $count";
            
        ?>

    </div>
    

</body>
</html>