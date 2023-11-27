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
    <p>Great Hello, Name if the user is logged in and has permission.</p>
    <pre>
        <code>
        $permission = true;
        $loggedIn = true;
        $user = "Rogelio Avilez";
        echo ($permission and $loggedIn) ? "Hello " . $user : "Hello Guest";
        </code>
    </pre>
    <h3><i>Result:</i></h3>
    <?php
        $permission = true;
        $loggedIn = true;
        $user = "Rogelio Avilez";
        echo ($permission and $loggedIn) ? "Hello " . $user : "Hello Guest";
    ?>
</div>
<hr>

<div>
    <h3></h3>
    <p></p>
    <pre>
        <code>

        </code>
    </pre>
    <h3><i>Result:</i></h3>
    <?php

    ?>
</div>
<hr>

</body>
</html>