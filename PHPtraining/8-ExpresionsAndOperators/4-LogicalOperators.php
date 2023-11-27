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

<div>
    <h3>&& where both conditions are true</h3>
    <p>Find the difference between AND <-> &&.</p>
    <pre>
        <code>
        </code>
    </pre>
    <h3><i>Result:</i></h3>
    <?php
        $result1 = true && false;
        $result2 = true && false;
        
        echo ($result1) ? "true" : "false";
        echo "<br>";
        echo ($result2) ? "true" : "false";
    ?>
</div>
<hr>

</body>
</html>