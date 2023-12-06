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
</body>
</html>