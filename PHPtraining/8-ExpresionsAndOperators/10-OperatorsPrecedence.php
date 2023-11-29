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
            Unary           !, ++, --
            Multiplication  *, /, %
            Add/Substract   +, -
            Relational      <, >, <=, >=
            Equality        ==, !=
            Logical AND     &&
            Logical OR      ||
            Conditional     ?:
            Assignment      =, +=, -=, *=, /=, %=
        </code></pre></p>

        <pre><code>
            $val = 10;
            echo $val++;

            $counter = $val++;
            echo $counter;
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $val = 10;
            echo $val++;

            $counter = $val++;
            echo $counter;
        ?>
    </div>
</body>
</html>