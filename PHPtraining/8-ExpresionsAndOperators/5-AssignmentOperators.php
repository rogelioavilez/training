<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Operators</title>
</head>
<body>
    <h1>Assignment Operators</h1>
    <p><pre>
    =   Assigns Values
    +=  Add Assignment Operator
    -=  Subtract Assignment Operator
    *=  Multiply Assignment Operator
    /=  Divide Assignment Operator
    %=  Modulus Assignment Operator
    </pre></p>

    <?php
    $marks = 10;
    $name = "Rogelio, Avilez";
    ?>
<div>
    <h3>Example 1</h3>
    <p>Use += Operator</p>

    <pre><code>
        $counter = 1;
        $counter += 1;
        $counter += $counter;
        echo "$counter:" . $counter;

        echo "<br>";

        $marks += 10;
        echo "$marks:" . $marks;
    </code></pre>
    <h3><i>Result:</i></h3>
    <?php
        $counter = 1;
        $counter += 1;
        $counter += $counter;
        echo "Variable counter is equal to: " . $counter;

        echo "<br>";

        $marks += 10;
        echo "Variable marks is equal to: " . $marks;
    ?>
</div>



</body>
</html>