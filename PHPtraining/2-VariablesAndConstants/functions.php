<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h1>Example 1</h1>
    <p>Define a function and function declaration (See code to learn more)</p>
    <?php
        function add(){

            //Function Body
            $firstValue = 10;
            $secondValue = 10;
            $total = $firstValue + $secondValue;
            echo $firstValue . " + ". $secondValue . " = " .$total;
        }
        //Calling function
        add();
    ?>
    
</body>
</html>