<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Defina and Access Array</title>
</head>
<body>
    <h1>Defina and Access Array</h1>
    <pre>
        * An Array is actually an ordered map. A map is  a type that associates values to keys.
    </pre>
    <hr>

    <!-- Example 1 -->
    <div>
        <h3>Learn how to define and use Array</h3>
        <pre>
            - To Define an Array use []
            - Use var_dump in order to print Array contents
        </pre>
        <pre><code>
            //This was the old version of creating arrays:

            $old_array = array("old food", "old drinks");
            var_dump($old_array);

            echo "<\br>";

            //After PHP 5.4 you can replace array () with []

            $string_array = [
                "food", "drinks"
            ];

            var_dump($string_array);

            echo "<\br>";

            $integer_array = [
                5, 6, 7, 8
            ];

            var_dump($integer_array);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            /* 
            This was the old version of creating arrays:

            */

            $old_array = array("old food", "old drinks");
            var_dump($old_array);

            echo "<br>";

            //After PHP 5.4 you can replace array () with []

            $string_array = [
                "food", "drinks"
            ];

            var_dump($string_array);

            echo "<br>";

            $integer_array = [
                5, 6, 7, 8
            ];

            var_dump($integer_array);
        ?>
    </div>

    <hr>
    <!-- Define an Array -->
    <div>
        <h3>find references in <a href="https://www.php.net/manual/en">https://www.php.net/manual/en</a></h3>
        <pre><code>
            $arr = [1, 2, 3];

            //function to print array

            var_dump($arr);

            //Human readable
            print_r($arr);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $arr = [1, 2, 3];

            //function to print array

            var_dump($arr);

            //Human readable
            print_r($arr);
        ?>
    </div>
    
    
</body>
</html>