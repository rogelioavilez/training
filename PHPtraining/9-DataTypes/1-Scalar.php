<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scalar</title>
</head>
<body>
    <h1>Scalar</h1>

    <div>
        <h3>Integers</h3>

        <pre>
        Integers are whole numbers
        Integer values does not have decimals
        Integer could have a + or - value
        Integer value can hold Octal (base 8), Hexadecimal (base 16) and Binary (base 2) values
        Every platform will have limited integer number to be defined
        Constant PHP_INT_SIZE can be used to find out the integer limit

        <code>
        //Define and print Integer
            $marks = 87;
            echo $marks;

        //Using 0x before the hexadecimal number you can get the HexaDecimal Value
            $marks = 0x19F2D7C1; //Value = 435345345

            echo $marks;
        </code>
        </pre>
        <h3><i>Result:</i></h3>
        <?php
        //Define and print Integer
            $marks = 87;
            echo $marks;

        //Using 0x before the hexadecimal number you can get the HexaDecimal Value
            $marks = 0x19F2D7C1; //Value = 435345345

            echo $marks;
        ?>

    </div>
    
    
</body>
</html>