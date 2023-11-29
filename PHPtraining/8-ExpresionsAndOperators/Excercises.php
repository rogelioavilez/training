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
            $value1 = 2;
            $value2 = 4;
            $add = $value1 + $value2;
            echo $value1 . " + " . $value2 . " = " . $add;
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $value1 = 2;
            $value2 = 4;
            $add = $value1 + $value2;
            echo $value1 . " + " . $value2 . " = " . $add;
        ?>
    </div>
<hr>
    <div>
        <h3>Excercise 2</h3>
        <p>Find Student Passed or Failed using Conditional Operator</p>
        <pre><code>
            $result= "Passed";
            echo($result === "Passed") ? "Student Passed" : "Student Failed" ;
            echo "Test Status: " . $result;
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $result= "Passed";
            echo($result === "Passed") ? "Student Passed" : "Student Failed" ;
            echo "Test Status: " . $result;
        ?>
    </div>
</body>
</html>