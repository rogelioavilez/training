<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitwise Operators</title>
</head>
<body>
    <h1>Bitwise Operators</h1>
    <p><pre>
        &   AND
        |   OR
        ^   XOR
        -   NOT


        How Bits Work

        0   bits    0000
        1   bits    0001
        2   bits    0010
        3   bits    0011
        4   bits    0100
        5   bits    0101

        1 - 1 = 1
        0 - 0 = 0
        0 - 1 = 0
        1 - 0 = 0

    </pre></p>

<div>
    <h3>Example 1</h3>
    <pre>How to work with Bits and print<code>
        $first = 0; //0000
        $second = 1; //0001

        echo $first & $second;
    </code></pre>
    <h3><i>Result:</i></h3>
    <?php
        $first = 0; //0000
        $second = 1; //0001

        echo $first & $second;
    ?>
</div>
    
</body>
</html>