<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If, Else, Statement</title>
</head>
<body>
    <h1>If, Else, Statement</h1>
    <pre>
        1) Syntax of If and Else Conditions
        2) Check if the inputs given by user is correct
        3) If condition statement without braces
        4) Check if student passed or failed.
    </pre>
    <hr>
    <div>
        <h3>If, Else Statement</h3>
        <pre><code>
            $some_boolean_condition = FALSE;

            if ($some_boolean_condition) {
                echo "This is a If block condition<br>";
                echo "This is a True Condition";
            } else {
                echo "This is an Else block condition<br>";
                echo "This is a False Condition";
            }
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $some_boolean_condition = FALSE;

            if ($some_boolean_condition) {
                echo "This is a If block condition";
                echo "This is a True Condition";
            } else {
                echo "This is an Else block condition";
                echo "This is a False Condition";
            }
        ?>
    </div>
</body>
</html>