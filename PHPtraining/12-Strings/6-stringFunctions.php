<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
</head>
<body>
    <h1>String Functions</h1>
    <pre>
        * Number of Words
        * Replace String
        * Reverse String
        * Remove White spaces
        * Shuffle Strings
        * Find Position Case Insensitive
        * Upper and Lower case
        * Word Wrap the String
    </pre>
    <hr>
    <!-- Number of Words -->
    <div>
        <h3>Number of Words</h3>
        <p>
            Use of (str_word_count) in order to get number of words in a String value.
        </p>
        <pre><code>
            $content = "You can do String operations easily with String functions";
            $findWord = "operations";
            $position = FALSE;

            echo $content;

            echo "<\br>";

            echo "Number of words in the String is: " . str_word_count($content);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $content = "You can do String operations easily with String functions";
            $findWord = "operations";
            $position = FALSE;

            echo $content;

            echo "<br>";

            echo "Number of words in the String is: " . str_word_count($content);
        ?>
    </div>

    <hr>
    <!-- Replace Strings -->
    <div>
        <h3>Replace Strings</h3>
        <p>
            Use of (str_replace) in order to Find and Replace a String.
        </p>
        <pre><code>
            echo "Find and Replace operations with manipulaton: " . str_replace("operations", "manipulations", $content);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            echo "Find and Replace operations with manipulaton: " . str_replace("operations", "manipulations", $content);
        ?>
    </div>

    <hr>
    <!-- Reverse Strings -->
    <div>
        <h3>Reverse Strings</h3>
        <p>
            Use of (strrev) in order to Reverse the content in String, letters will appear backwards.
        </p>
        <pre><code>
            echo strrev($content);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            echo strrev($content);
        ?>
    </div>
</body>
</html>