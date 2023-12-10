<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mixed Arrays</title>
</head>
<body>
    <h1>Mixed Arrays</h1>
    <pre>
    * If index is not specified, PHP will use the increment of the largest previously used integer key.
    </pre>

    <hr><div>
        <h3>Add after largest used integer key</h3>
        <pre><code>
            //Defining arrays while skiping some key elements
                $arr = [];
                $arr[0] = 1;
                $arr[2] = "String";
                $arr[4] = true;
                $arr[10] = 14.5;

            //Adding new values to incomplete array
                $arr[] = "New String 1";
                $arr[] = "New String 2";

            //Output
                var_dump($arr);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            //Defining arrays while skiping some key elements
            $arr = [];
            $arr[0] = 1;
            $arr[2] = "String";
            $arr[4] = true;
            $arr[10] = 14.5;

            //Adding new values to incomplete array
            $arr[] = "New String 1";
            $arr[] = "New String 2";

            //Output
            var_dump($arr);

        ?>
    </div>
</body>
</html>