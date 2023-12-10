<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each Loop using Arrays</title>
</head>
<body>
    <h1>For Each Loop using Arrays</h1>
    <pre>
    * example of for each template:

        foreach($array as $value){
            //Code to be executed
        }
    </pre>

    <hr>
    <div>
        <h3></h3>
        <pre><code>
            $arr = ["Mon", "Tues", "Wed", "Thur", "Fri", "Sat", "Sun"];
                var_dump($arr);

                $counter = 0;

                foreach($arr as $values){
                    echo "[$counter] => $values => $arr[$counter]";

                    $counter++;
                }
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $arr = ["Mon", "Tues", "Wed", "Thur", "Fri", "Sat", "Sun"];
            var_dump($arr);

            $counter = 0;

            foreach($arr as $values){
                echo "[$counter] => $values => $arr[$counter]";

                $counter++;
            }
        ?>
    </div>

    <hr>
    <div>
        <h3>Proper way to define an array and array inside of array</h3>
        <pre><code>
        //Adds value to and Array
            $array2 = [10];
            var_dump($array2);

            //Creates an Array inside of Array value
            $array2[10] = [5];
            var_dump($array2);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            //Adds value to and Array
            $array2 = [10];
            var_dump($array2);

            echo "<br>";

            //Creates an Array inside of Array value
            $array2[10] = [5];
            var_dump($array2);

        ?>
    </div>
    
</body>
</html>