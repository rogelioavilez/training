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
            echo "~ Result is: ";
            echo ~$number;
            echo "<br>";
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $number = 5;
            echo "~ Result is: ";
            echo ~$number;
            echo "<br>";
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
            #$error = 1/0;
            echo "Like nothing happened";
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            #$error = 1/0;
            echo "Like nothing happened";
        ?>
    </div>

    <hr>
    <div>
        <h3>Show an example for Operator Precedence</h3>
        <p></p>
        <pre><code>
            Although multiplication comes after, it has precedence against the addition symbol 

            $valueX = 5 + 2 * 3;
            echo $valueX;
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $valueX = 5 + 2 * 3;
            echo $valueX;
        ?>
    </div>
</body>
</html>