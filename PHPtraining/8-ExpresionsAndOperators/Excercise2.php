<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excercises 2</title>
</head>
<body>
    <h1>Excercises</h1>

    <div>
        <h3>Decrement using Decrement Operator</h3>
        <pre><code>
            $reduceVal = 100;
            echo $reduceVal;
            echo "<\br>";
            $reduceVal -= 10;
            echo $reduceVal;
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $reduceVal = 100;
            echo $reduceVal;
            echo "<br>";
            $reduceVal -= 10;
            echo $reduceVal;

        ?>
    </div>
<hr>
    <div>
        <h3>Show the negative of 5 using Bitwise Operator</h3>
        <pre><code>
            $number = 5;
            echo ~$number;
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $number = 5;
            echo ~$number;
        ?>
    </div>

<hr>
    <div>
        <h3>Execute a dos command using Execution Operator</h3>
        <pre><code>
            echo`ls`;
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            echo`ls`;
        ?>
    </div>

    <hr>
    <div>
        <h3>Raise an Error and Control it using Execution Operation</h3>
        <p></p>
        <pre><code>
            
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            @$error = 1/0;
            echo "Like nothing happened";
        ?>
    </div>

    <hr>
    <div>
        <h3>Excercise 5</h3>
        <p></p>
        <pre><code>
            
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            
        ?>
    </div>
</body>
</html>