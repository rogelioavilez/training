<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Dimension Array</title>
</head>
<body>
    <h1>Multi Dimension Array</h1>
    <pre>
    * Array inside an Array is called multidimensional Array
    * Array Holding one or multiple Arrays
    </pre>

    <hr>
    <div>
        <h3>Single Dimension Array</h3>
        <pre><code>
            $arr = [1, 2, 3, 4, 5];
            var_dump($arr);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $arr = [1, 2, 3, 4, 5];
            var_dump($arr);
        ?>
    </div>

    <hr>
    <div>
        <h3>Single Dimension Associative Array</h3>
        <pre><code>
            $arr1 = [
                "John" => "john@email.com",
                "Ruth" => "ruth@email.com",
                "Elmo" => "elmo@email.com"
            ];
            var_dump($arr1);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $arr1 = [
                "John" => "john@email.com",
                "Ruth" => "ruth@email.com",
                "Elmo" => "elmo@email.com"
            ];
            var_dump($arr1);
        ?>
    </div>

    <hr>
    <div>
        <h3>Multi Dimension with Indexed</h3>
        <pre><code>
            $arr2 = [
                [0,1,2,3,4,5],
                [6,7,8],
                [9,10],
                
            ];
            var_dump($arr2);

            echo "<br><br>";

            foreach($arr2 as $singleArr){
                var_dump($singleArr);
            }
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $arr2 = [
                [0,1,2,3,4,5],
                [6,7,8],
                [9,10],
                
            ];
            var_dump($arr2);

            echo "<br><br>";

            foreach($arr2 as $singleArr){
                var_dump($singleArr);
            }
        ?>
    </div>

    <hr>
    <div>
        <h3>Multi Dimension With Associative</h3>
        <pre><code>
            $arr3 = [
                "emailList1" => [
                    "John" => "john@email.com",
                    "Ruth" => "ruth@email.com",
                    "Elmo" => "elmo@email.com"
                ],

                "emailList2" => [
                    "Johny" => "johny@email.com",
                    "Ruthy" => "ruthy@email.com",
                    "Alma" => "alma@email.com"
                ]
                
            ];
            var_dump($arr3);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $arr3 = [
                "emailList1" => [
                    "John" => "john@email.com",
                    "Ruth" => "ruth@email.com",
                    "Elmo" => "elmo@email.com"
                ],

                "emailList2" => [
                    "Johny" => "johny@email.com",
                    "Ruthy" => "ruthy@email.com",
                    "Alma" => "alma@email.com"
                ]
                
            ];
            var_dump($arr3);

            echo "<br>";

            foreach($arr3 as $valueArray){

                foreach($valueArray as $values){
                    echo $values;
                }

            }
        ?>
    </div>
    
</body>
</html>