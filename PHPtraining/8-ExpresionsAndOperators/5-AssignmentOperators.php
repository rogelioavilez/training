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

<div>
    <h3>Use += Operator</h3>

    <pre><code>
        $marks = 10;
        $name = "Rogelio";

        $name .= ", ";
        $name .= "Avilez";
        echo "My Full Name is: " .  $name;


        $counter = 1;
        $counter += 1;
        $counter += $counter;
        echo "Variable counter is equal to: " . $counter;

        echo "<br>";

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

<div>
    <h3>Use -= Operator</h3>

    <pre><code>
        
    </code></pre>
    <h3><i>Result:</i></h3>
    <?php
        
    ?>
    <hr>
</div>



</body>
</html>