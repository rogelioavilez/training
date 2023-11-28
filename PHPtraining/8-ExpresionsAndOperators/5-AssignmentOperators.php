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
    .=  Add String Assignment Operator
    +=  Add Integer Assignment Operator
    -=  Subtract Assignment Operator
    *=  Multiply Assignment Operator
    /=  Divide Assignment Operator
    %=  Modulus Assignment Operator
    </pre></p>
<!-- += , .= Add -->
<div>
    <h3>Use Add Operator .=  and  +=</h3>

    <pre><code>
        $marks = 10;
        $name = "Rogelio";

        $name .= ", ";
        $name .= "Avilez";
        echo "My Full Name is: " .  $name;

        echo "<\br>";

        $counter = 1;
        $counter += 1;
        $counter += $counter;
        echo "Variable counter is equal to: " . $counter;

        echo "<\br>";

        $marks += 10;
        echo "Variable marks is equal to: " . $marks;
    </code></pre>
    <h3><i>Result:</i></h3>
    <?php
        $marks = 10;
        $name = "Rogelio";

        $name .= ", ";
        $name .= "Avilez";
        echo "My Full Name is: " .  $name;

        echo "<br>";

        $counter = 1;
        $counter += 1;
        $counter += $counter;
        echo "Variable counter is equal to: " . $counter;

        echo "<br>";

        $marks += 10;
        echo "Variable marks is equal to: " . $marks;
    ?>
    <hr>
</div>
<!-- -= Substract -->
<div>
    <h3>Use -= Operator</h3>

    <pre><code>
        $counter = 4;
        $counter -= 1;
        $counter -= $counter;
        echo "New value for Variable counter is: " . $counter;
    </code></pre>
    <h3><i>Result:</i></h3>
    <?php
        $counter = 4;
        $counter -= 1;
        $counter -= $counter;
        echo "New value for Variable counter is: " . $counter;
    ?>
    <hr>
</div>
<!-- *= Multiply -->
<div>
    <h3>Use *= Operator</h3>

    <pre><code>
        $square = 10;
        $square *= $square;
        echo "Square root of 10= " . $square;
    </code></pre>
    <h3><i>Result:</i></h3>
    <?php
        $square = 10;
        $square *= $square;
        echo "Square root of 10= " . $square;
    ?>
    <hr>
</div>



</body>
</html>