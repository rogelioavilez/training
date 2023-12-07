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
        <pre>
            - Use of (str_replace) in order to Find and Replace a String.
            - The content in String will not change permanently
        </pre>
        <pre><code>
            echo "Find and Replace operations with manipulaton: " . str_replace("operations", "manipulations", $content);

            echo "<\br>";

            echo $content;
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            echo "Find and Replace operations with manipulaton: " . str_replace("operations", "manipulations", $content);

            echo "<br>";

            echo $content;
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

    <hr>
    <!-- Shuffle Strings -->
    <div>
        <h3>Shuffle Strings</h3>
        <p>
            Use of (str_shuffle) in order to Shuffle the content in String, letters be unordered/shuffled.
        </p>
        <pre><code>
            echo str_shuffle($content);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            echo str_shuffle($content);
        ?>
    </div>

    <hr>
    <!-- Find position Case Insensitive -->
    <div>
        <h3>Find position Case Insensitive</h3>
        <p>
            Use of (stripos) in order to Find a position using case insensitive.
        </p>
        <pre><code>
            echo stripos($content, "OPERATIONS");
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            echo stripos($content, "OPERATIONS");
        ?>
    </div>

    <hr>
    <!-- Upper Case and Lower Case -->
    <div>
        <h3>Upper Case and Lower Case</h3>
        <pre>
            Use of (strtoupper  &  strtolower) in order to change font casing inside String content. 
        </pre>
        <pre><code>
            echo strtoupper($content);

            echo "<br>";

            echo strtolower($content);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            echo strtoupper($content);

            echo "<br>";

            echo strtolower($content);
        ?>
    </div>

    <hr>
    <!-- Word Wrap -->
    <div>
        <h3>Word Wrap</h3>
        <pre>
            Use of (wordwrap) in order to limit the lenght per line in String.
        </pre>
        <pre><code>
            $content = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit amet minima perferendis totam sint ex ipsam quidem, fuga excepturi eveniet enim voluptatum doloribus beatae autem tempore sapiente temporibus quasi rerum?";

            //Indicate the lenght of lines in word wrap
            echo wordwrap($content, 5);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php

            $content = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit amet minima perferendis totam sint ex ipsam quidem, fuga excepturi eveniet enim voluptatum doloribus beatae autem tempore sapiente temporibus quasi rerum?";

            //Indicate the lenght of lines in word wrap
            echo wordwrap($content, 5);
        ?>
    </div>
</body>
</html>