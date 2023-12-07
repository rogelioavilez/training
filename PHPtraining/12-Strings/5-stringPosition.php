<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Position</title>
</head>
<body>
    <h1>String Position</h1>
    <pre>

    </pre>
    <hr>
    <div>
        <h3>Example 1:</h3>
        <p>
            Find the String position inside another String.
        </p>
        <pre><code>
            $content = "This is a very long content and it is a String";

            $findContentWord = "content";

            $position = strpos($content, $findContentWord);

            echo $position;
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $content = "This is a very long content and it is a String";

            $findContentWord = "content";

            $position = strpos($content, $findContentWord);

            echo $position;
        ?>
    </div>
</body>
</html>