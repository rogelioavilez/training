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

    <hr>

    <h1>Example 2</h1>
    <p>Duplicate function (Uncomment function to see error)</p>

    <!-- 
        If we duplicate the function this will cause an error in PHP.
        for example:

            function add(){

                echo 'Duplicate function';
            }

            add();
        
    -->

    <hr>

    <h1>Example 3</h1>
    <p>Duplicate function </p>

    <?php
    welcome_message();
        function welcome_message(){
            echo "Welcome to PHP functions!";
        }
    ?>

</body>
</html>