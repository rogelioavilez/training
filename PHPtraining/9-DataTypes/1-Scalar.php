<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scalar</title>
</head>
<body>
    <h1>Scalar</h1>
    <!--integers-->
    <div>
        <h3>Integers</h3>

        <pre>
        * Integers are whole numbers
        * Integer values does not have decimals
        * Integer could have a + or - value
        * Integer value can hold Octal (base 8), Hexadecimal (base 16) and Binary (base 2) values
        * Every platform will have limited integer number to be defined
        * Constant PHP_INT_SIZE can be used to find out the integer limit

        <code>
        //Define and print Integer
            $marks = 87;
            echo $marks;
            echo "<\br>";

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
            echo "<br>";

        //Using 0x before the hexadecimal number you can get the HexaDecimal Value
            $marks = 0x19F2D7C1; //Value = 435345345

            echo $marks;
        ?>

    </div>
    <hr>
    <!--Doubles-->
    <div>
        <h3>Doubles</h3>

        <pre>
        * Decimals have decimal points
        * Use round() method with precision
        <code>
        //Define and print decimal values
            $totalScore = 78.87;
            echo $totalScore;
            echo "<\br>";

        //Negative Decimals
            $temperature = -40.23;
            echo $temperature;
            echo "<\br>";

        //Round a double value
            $price = 4.99;
            echo round($price);
            echo "<\br>";

        //Compare 2 double values with precision
            $price = 1.87;
            $bid = 1.97;
            echo(abs($price - $bid) < 0.1) ? "Accepted" : "Rejected";
        </code>
        </pre>
        <h3><i>Result:</i></h3>
        <?php
            //Define and print Decimal values
            $totalScore = 78.87;
            echo $totalScore;
            echo "<br>";

            //Negative Decimals
            $temperature = -40.23;
            echo $temperature;
            echo "<br>";

            //Round a double value
            $price = 4.99;
            echo round($price);
            echo "<br>";

            //Compare 2 double values with precision
            $price = 1.87;
            $bid = 1.97;
            echo(abs($price - $bid) < 0.1) ? "Accepted" : "Rejected";
        ?>

    </div>
    <hr>
    <!--Boolean-->
    <div>
        <h3>Boolean</h3>

        <pre>
        * True or False can be used to assign a boolean variable
        * Boolean are literal are case insensitive - TRUE or True or true are the same.
        * true = 1 and false = 0 when echo
        * Integer variable with value 0 is false and anything else is true
        * String variable with value 0 is false and anything else is true
        * Boolean is used in condition to check something
        * Opertors which results into boolean conditions
        <code>
        //Define a Boolean Variable
            $flag1 = TRUE;
            $flag2 = FALSE;
            echo ($flag1) ? "True" : "False";
            echo "<\br>";
            echo ($flag2) ? "True" : "False";
            echo "<\br>";

        //Print Boolean Variables
            echo "True: " . $flag1;
            echo "<\br>";
            echo "False: " . $flag2;
            echo "<\br>";

        //Use String as Boolean Condition
            $isLoggedIn = true;
            $userSessionName = "Rogelio, Avilez";
            echo ($isLoggedIn && $userSessionName) ? "User Logged In" : "User Not Logged In"; 
        </code>
        </pre>
        <h3><i>Result:</i></h3>
        <?php
        //Define a Boolean Variable
            $flag1 = TRUE;
            $flag2 = FALSE;
            echo ($flag1) ? "True" : "False";
            echo "<br>";
            echo ($flag2) ? "True" : "False";
            echo "<br>";

        //Print Boolean Variables
            echo "True: " . $flag1;
            echo "<br>";
            echo "False: " . $flag2;
            echo "<br>";

        //Use String as Boolean Condition
            $isLoggedIn = true;
            $userSessionName = "Rogelio, Avilez";
            echo ($isLoggedIn && $userSessionName) ? "User Logged In" : "User Not Logged In";
        ?>

    </div>
    <hr>
    <!--String-->
        <div>
        <h3>String</h3>

        <pre>
        * 
        <code>

        </code>
        </pre>
        <h3><i>Result:</i></h3>
        <?php
        //
        ?>

    </div>
    <hr>
    
</body>
</html>