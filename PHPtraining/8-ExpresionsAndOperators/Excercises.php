<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excercises</title>
</head>
<body>
    <h1>Excercises</h1>

    <div>
        <h3>Excercise 1</h3>
        <p>Add 2 numbers using Arithmeical operators</p>
        <pre><code>
            $value = 2 + 2;
            echo "2 + 2 = " . $value;
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $value = 2 + 2;
            echo "2 + 2 = " . $value;
        ?>
    </div>
<hr>
    <div>
        <h3>Excercise 2</h3>
        <p>Find Student Passed or Failed using Conditional Operator</p>
        <pre><code>
            $passed(true) ? "Pass" : "Fail" ;
            echo "Condition is: " . $passed;
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $passed(true) ? "Pass" : "Fail" ;
            echo "Condition is: " . $passed;
        ?>
    </div>
</body>
</html>