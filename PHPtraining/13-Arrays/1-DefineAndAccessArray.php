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

            //Do not use echo to print Arrays, you can only use echo to print an item inside array

            echo $arr[0];
            echo $arr[1];
            echo $arr[2];

            //Also you can print inside a String
            echo "$arr[0]";
            echo "$arr[1]";
            echo "$arr[2]";
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $arr = [1, 2, 3];

            //function to print array

            var_dump($arr);

            echo "<br>";
            //Human readable
            print_r($arr);

            echo "<br>";

            //Do not use echo to print Arrays, you can only use echo to print an item inside array

            echo $arr[0];
            echo $arr[1];
            echo $arr[2];

            echo "<br>";

            //Also you can print inside a String
            echo "$arr[0]";
            echo "$arr[1]";
            echo "$arr[2]";
        ?>
    </div>

    <!-- Understand Array definitions -->
    <div>
        <h3>Understand Array Definitions
        </h3>
        <pre><code>
        * $arr is an Array Variable
        * $arr[0] is an Array Element
        * 0 in an index of an Array
        $Array index starts with 0 not 1
        * Array can store any type of value - String, Integer, Double, Boolean
        *Array has a lenght based on the number of elements it has.
        * You can also have Array inside of another Array - More of it in the next lecture.
        * Usecase: Collection of Variables together.

            //To get array lenght
            echo "Array length: " . count($arr);

            //Loop through the Array using for Loop
            for($count = 0; $count < count($arr); $count++){
                echo $arr[$count];
                
                echo "$arr[$count]";
            }
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php

            //To get array lenght
            echo "Array length: " . count($arr);

            echo "<br>";

            //Loop through the Array using for Loop
            for($count = 0; $count < count($arr); $count++){
                echo $arr[$count];
                echo "<br>";
                echo "$arr[$count]";
            }
        ?>
    </div>
    
    
</body>
</html>