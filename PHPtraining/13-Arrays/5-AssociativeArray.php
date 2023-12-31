<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <h1>Associative Arrays</h1>
    <pre>
        * In associative Arrays you specify the Index
        * index => value
        * Short notation =
            => is a special symbol to represent key and value
        * key => value - Key is the index and Value is the value at the index.
    </pre>
    <hr><div>
        <h3></h3>
        <pre><code>
        //indexed Array
            $arr = ["mon", "tues", "wed","thurs", "fri", "sat", "sun"];

            var_dump($arr);

            echo "<br>";

            foreach($arr as $value){
                echo $value;
                echo "<br>";
            }

        //Associative Array
            $arr = [0 => "mon", 1 => "tues", 2 => "wed", 3 => "thurs", 4 => "fri", 5 => "sat", 6 => "sun"];

            var_dump($arr);

            echo "<br>";

            foreach($arr as $value){
                echo $value;
                echo "<br>";
            }

        //You can create your own cutom index names
            $arr = ["CustomIndex" => "mon", 1 => "tues", 2 => "wed", 3 => "thurs", 4 => "fri", 5 => "sat", 6 => "sun"];

            var_dump($arr);

            echo "<\br>";

            foreach($arr as $value){
                echo $value;
                echo "<\br>";
            }

            foreach($arr as $key => $value){
                echo $key . " => " . $value;
                echo "<\br>";
            }
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php

        //indexed Array
            $arr = ["mon", "tues", "wed","thurs", "fri", "sat", "sun"];

            var_dump($arr);

            echo "<br>";

            foreach($arr as $value){
                echo $value;
                echo "<br>";
            }

        //Associative Array
            $arr = [0 => "mon", 1 => "tues", 2 => "wed", 3 => "thurs", 4 => "fri", 5 => "sat", 6 => "sun"];

            var_dump($arr);

            echo "<br>";

            foreach($arr as $value){
                echo $value;
                echo "<br>";
            }

        //You can create your own cutom index names
            $arr = ["CustomIndex" => "mon", 1 => "tues", 2 => "wed", 3 => "thurs", 4 => "fri", 5 => "sat", 6 => "sun"];

            var_dump($arr);

            echo "<br>";

            foreach($arr as $value){
                echo $value;
                echo "<br>";
            }

            foreach($arr as $key => $value){
                echo $key . " => " . $value;
                echo "<br>";
            }
            
        ?>
    </div>

    <hr><div>
        <h3>Create your own Arrays Variables</h3>
        <pre><code>
            $userDetails = [
                "John" => "john@email.com",
                "Lucas" => "lucas@email.com",
                "Sofia" => "sofia@email.com"
            ];

            var_dump($userDetails);

            echo "<\br>";

            $userDetails["Rogelio"] = "rogelio@email.com";

            var_dump($userDetails);

            echo "<\br>";

            echo $userDetails["Rogelio"];
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $userDetails = [
                "John" => "john@email.com",
                "Lucas" => "lucas@email.com",
                "Sofia" => "sofia@email.com"
            ];

            var_dump($userDetails);

            echo "<br>";

            $userDetails["Rogelio"] = "rogelio@email.com";

            var_dump($userDetails);

            echo "<br>";

            echo $userDetails["Rogelio"];
        ?>
    </div>
</body>
</html>