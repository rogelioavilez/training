<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Variables</title>
</head>
<body>
    <h1>Example 1</h1>
    <p>Using a counter that adds value, We see the Value change as it passes throug function</p>
    
    <?php
        function counter(){
            $count = 1;
            echo $count . "<br>";
            $count+= 1;
        }
        counter();
        counter();
        counter();
        counter();
    ?>

</body>
</html>