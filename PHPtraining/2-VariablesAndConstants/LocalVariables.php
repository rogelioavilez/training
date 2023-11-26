<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Variables</title>
</head>
<body>

    <h1>Example 1</h1>
    <p>Variables defined inside a function and outside</p>
    <?php
        $name = "Rogelio";
        function print_name(){
            $name = "PHP<br>";
            echo $name;
        }

        print_name();
        echo $name;
    ?>
    <hr>
    <h1>Example 2</h1>
    <p>Variables defined outside a function cannot be detected and show as undefined</p>
    <?php
        $name2 = "Alberto";
        function print_name2(){
            //Variable is undefined, as its not included inside the function
            echo $name2;
        }

        print_name2();
    ?>
    <hr>
    <h1>Example 3</h1>
    <p>Variables defined inside a function cannot be detected and show as undefined</p>
    <?php
    
        function print_name3(){
            //Variable is undefined, as its not included inside the function
            $name3 = "Avilez Garza";
            echo $name3;
        }


        echo $name3;
    ?>
    <hr>

    
</body>
</html>