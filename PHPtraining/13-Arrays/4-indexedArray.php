<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Arrays</title>
</head>
<body>
    <h1>Indexed Arrays</h1>
    <pre>
    * Sequence array of elements with Integer index numbers
    * Mostly it is in sequence
    * Index starts with 0
    * New elements get the index of highest index + 1 number_format
    * You can always break the sequence and add new elements to future index
    </pre>

    <hr><div>
        <h3></h3>
        <pre><code>
            
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $arr = [1, 2, 3, 4,5 ];
            var_dump($arr);

            //If break a sequence array skips blank values when adding a new array value

            $arr[100] = 100;
            $arr[] = 101;
            var_dump($arr);

            //If want to erase the whole array values and replace them for something new you dont have to add brackets before adding value, for example:

            $arr = ["one", "two", "three", "four"];
            var_dump($arr);
        ?>
    </div>
</body>
</html>