<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators Precedence</title>
</head>
<body>
    <h1>Operators Precedence</h1>

    <div>
        <h3></h3>
        <p><pre><code>
        Higher precedence Chart
            Unary           !, ++, --
            Multiplication  *, /, %
            Add/Substract   +, -
            Relational      <, >, <=, >=
            Equality        ==, !=
            Logical AND     &&
            Logical OR      ||
            Conditional     ?:
            Assignment      =, +=, -=, *=, /=, %=
        Lower Precedence
        </code></pre></p>

        <pre><code>
        $val = 10;
            echo $val++;
            echo $val;
            echo "<\br>";
            $counter = $val++;
            echo $val;
            echo $counter;
            echo "<\br>";

            $math = 5 * 3 + 2;
            echo $math;

            $result1 = true && false;
            $result2 = true and false;

            echo ($result1)?"true" : "false";
            echo "<\br>";
            echo ($result2)?"true" : "false";
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $val = 10;
            echo $val++;
            echo $val;
            echo "<br>";
            $counter = $val++;
            echo $val;
            echo $counter;
            echo "<br>";

            $math = 5 * 3 + 2;
            echo $math;

            $result1 = true && false;
            $result2 = true and false;

            echo ($result1)?"true" : "false";
            echo "<br>";
            echo ($result2)?"true" : "false";
        ?>
    </div>
</body>
</html>