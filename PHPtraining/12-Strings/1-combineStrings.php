<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combine Strings</title>
</head>
<body>
    <h1>Combine Strings</h1>
    <hr>
    <!-- Example 1-->
    <div>
        <h3>Example 1:</h3>
        <p>
            '.' (dot) operator is used to combine 2 strings together
        </p>
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
    <hr>
    <!-- Example 2-->
    <div>
        <h3>Example 2:</h3>
        <p>
            Add String, Integer, Boolean, and other basic Variable types with operator '.'
        </p>
        <pre><code>
            $marks = 100;
            $passed = true;

            $fullName = $firstName . $secondName . $lastName;

            $content = "Student $fullName got a Total " . $marks . ", with this score he passed the test. He got " . $passed . " out of 1 completed";

            echo $content;
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $marks = 100;
            $passed = true;

            $fullName = $firstName . $secondName . $lastName;

            $content = "Student $fullName got a Total " . $marks . ", with this score he passed the test. He got " . $passed . " out of 1 completed";

            echo $content;
        ?>
    </div>
</body>
</html>