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
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $result= "Passed";
            echo($result === "Passed") ? "Student Passed" : "Student Failed" ;
        ?>
    </div>

<hr>
    <div>
        <h3>Excercise 3</h3>
        <p>Show an Even and Odd number</p>
        <pre><code>
            $number1 = 10;
            $result1 = $number1%2;

            echo ($result1 == 0)?  $number1 . " is an Even Number" :  $number1 . "Odd Number";

            echo "<\br>";
            $number2 = 11;
            $result2 = $number2%2;

            echo ($result2 == 0)?  $number2 . " is an Even Number" :  $number2 . " is an Odd Number";   
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $number1 = 10;
            $result1 = $number1%2;

            echo ($result1 == 0)?  $number1 . " is an Even Number" :  $number1 . "Odd Number";

            echo "<br>";
            $number2 = 11;
            $result2 = $number2%2;

            echo ($result2 == 0)?  $number2 . " is an Even Number" :  $number2 . " is an Odd Number";            
        ?>
    </div>

    <hr>
    <div>
        <h3>Excercise 4</h3>
        <p>Check if User has access to log in rights using logical operators</p>
        <pre><code>
            $hasLogin = true;
            $hasAccess = true;
            echo($hasLogin && $hasAccess) ? "User Access Granted" : "User Access Blocked";
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $hasLogin = true;
            $hasAccess = true;
            echo($hasLogin && $hasAccess) ? "User Access Granted" : "User Access Blocked";
        ?>
    </div>

    <hr>
    <div>
        <h3>Excercise 5</h3>
        <p>Assign an Integer value and increment by 10 using Assign Operator</p>
        <pre><code>
            $integerVal = 0;
            $integerVal +=10;

            echo $integerVal;
            echo $integerVal;
            echo $integerVal;
            echo $integerVal;
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $integerVal = 0;
            $integerVal = $integerVal + 10;

            echo $integerVal;
            echo $integerVal;
            echo $integerVal;
            echo $integerVal;
        ?>
    </div>
</body>
</html>