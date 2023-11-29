<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execution Operators</title>
</head>
<body>
    <h1>Execution Operators</h1>

    <div>
        <h3>Backtick symbol ``</h3>
        <p>Left side to number one on keyboard</p>
        <pre><code>
            //WINDOWS
            echo `dir *.php`;
            echo "<\br>";
            // MAC
            echo `ls *.php`;
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            //WINDOWS
            echo `dir *.php`;
            echo "<br>";
            // MAC
            echo `ls *.php`;
        ?>
    </div>
</body>
</html>