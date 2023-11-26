<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Variables</title>
</head>
<body>
    <h1>Example 1</h1>
    <p>Using a counter that adds value, We see the Value doesn't change as it passes through function due that it gets redefined everytime it passed through</p>
    
    <?php
        function counter(){
            $count = 1;
            echo $count . "<br>";
            $count = $count + 1;
        }
        counter();
        counter();
        counter();
        counter();
    ?>
    <hr>
    <h1>Example 2</h1>
    <p>Using a Static Value for the counter to add value, We see the Value changes as it passes through function as it respects the reminder value everytime it passed through the function</p>
    
    <?php
        function counter_static(){
            static $count = 1;
            echo $count . "<br>";
            $count = $count + 1;
        }
        counter_static();
        counter_static();
        counter_static();
        counter_static();
    ?>

</body>
</html>