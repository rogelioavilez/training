<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include Once</title>
</head>
<body>
    <h1>Include Once</h1>
    <p>* If a file has already been added it does not include it again, this can be really useful for items such as menu bars, or footers, that do not repeat.</p>
    <hr>
    <h3>Example 1</h3>
    <pre><code>
        include "12.1-extraFile.php";
        echo "Text in between 1<\br>";

        include_once "12.1-extraFile.php";
        echo "Text in between 2<\br>";
        
        include "12.1-extraFile.php";
    </code></pre>
    <h3><i>Result:</i></h3>
    <?php
        include "12.1-extraFile.php";
        echo "Text in between 1<br>";
        include_once "12.1-extraFile.php";
        echo "Text in between 2<br>";
        include "12.1-extraFile.php";
    ?>
    
</body>
</html>