<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators</title>
</head>
<body>
    <h1>Logical Operators</h1>
    <p>
        <pre>
        AND - Both should be true.
        OR - Anyone can be true.
        && - Both should be true.
        || - Anyone can be true.
        ! - If not.
        </pre>
    </p>
<!-- AND -->
<div>
    <h3>AND where both conditions are true</h3>
    <p>Great Hello to User if is logged in and has permission.</p>
    <pre>
        <code>
        $permission = true;
        $loggedIn = true;
        $user = "Rogelio Avilez";
        echo ($permission and $loggedIn) ? "Hello " . $user : "Hello Guest";
        echo "<\br>";
        $permission = false;
        echo ($permission and $loggedIn) ? "Hello " . $user : "Hello Guest";
        </code>
    </pre>
    <h3><i>Result:</i></h3>
    <?php
        $permission = true;
        $loggedIn = true;
        $user = "Rogelio Avilez";
        echo ($permission and $loggedIn) ? "Hello " . $user : "Hello Guest";
        echo "<br>";
        $permission = false;
        echo ($permission and $loggedIn) ? "Hello " . $user : "Hello Guest";
    ?>
</div>
<hr>
<!-- OR -->
<div>
    <h3>OR where at leastone of the conditions is true</h3>
    <p>Check if Student passed at least one exam</p>
    <pre>
        <code>
        $student = "John";
        $mathPassed = true;
        $sciencePassed = false;

        echo ($mathPassed or $sciencePassed) ? $student . " has passed at least one" : $student . " has not passed";
        echo "<\br>";
        $mathPassed = false;
        echo ($mathPassed or $sciencePassed) ? $student . " has passed at least one" : $student . " has not passed";
        </code>
    </pre>
    <h3><i>Result:</i></h3>
    <?php
        $student = "John";
        $mathPassed = true;
        $sciencePassed = false;

        echo ($mathPassed or $sciencePassed) ? $student . " has passed at least one" : $student . " has not passed";
        echo "<br>";
        $mathPassed = false;
        echo ($mathPassed or $sciencePassed) ? $student . " has passed at least one" : $student . " has not passed";

    ?>
</div>
<hr>
<!-- && -->
<div>
    <h3>&& where both conditions are true</h3>
    <p>Find the difference between AND <-> &&.</p>
    <pre>
        <code>
        $result1 = true && false;
        $result2 = true and false;
        
        echo ($result1) ? "true" : "false";
        echo "<\br>";
        echo ($result2) ? "true" : "false";
        </code>
    </pre>
    <h3><i>Result:</i></h3>
    <p><i>When 2 Operators are present in the same Expression, && has more precedence than =, and = has more precedence than AND, that is the reason the result changes, even when the AND and && search for both conditions to be true.</i></p>
    <?php
        $result1 = true && false;
        $result2 = true and false;
        
        echo ($result1) ? "true" : "false";
        echo "<br>";
        echo ($result2) ? "true" : "false";
    ?>
</div>
<hr>
<!-- || -->
<div>
    <h3>Diference between OR and ||</h3>
    <p>.</p>
    <pre>
        <code>
        $result1 = true || false;
        $result2 = true or false;
        
        echo ($result1) ? "true" : "false";
        echo "<br>";
        echo ($result2) ? "true" : "false";
        </code>
    </pre>
    <h3><i>Result:</i></h3>
    <?php
        $result1 = true || false;
        $result2 = true or false;
        
        echo ($result1) ? "true" : "false";
        echo "<br>";
        echo ($result2) ? "true" : "false";
    ?>
</div>
<hr>



</body>
</html>