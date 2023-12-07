<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combine Strings</title>
</head>
<body>
    <h1>Combine Strings</h1>
    <pre>
        * '.' (dot) operator is used to combine 2 strings together
    </pre>
    <hr>

    <div>
        <h3>Example 1:</h3>
        <pre><code>
            $firstName = "Rogelio ";
            $secondName = "Alberto ";
            $lastName = "Avilez Garza";

            $fullName = $firstName . $secondName . $lastName;

            echo $fullName;
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $firstName = "Rogelio ";
            $secondName = "Alberto ";
            $lastName = "Avilez Garza";

            $fullName = $firstName . $secondName . $lastName;

            echo $fullName;
        ?>
    </div>
</body>
</html>