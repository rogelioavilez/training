<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increment Decrement Operators</title>
</head>
<body>
    <h1>Increment Decrement Operators</h1>
    <p><pre>
        ++  Incremental by 1
        --  Decremental by 1
    </pre></p>

<div>
    <h3>++ Increment</h3>
    <pre><code>
        $counter = 10;
        $counter ++;

        echo "Increment by 1 the Counter, New counter value is: " . $counter;
    </code></pre>
    <h3><i>Result:</i></h3>
    <?php
        $counter = 10;
        $counter ++;

        echo "Increment by 1 the Counter, New counter value is: " . $counter;
    ?>
    <hr>
</div>

<div>
    <h3>-- Decrement</h3>
    <pre><code>
        $counter --;

        echo "Decrease by 1 the Counter, New counter value is back to: " . $counter;
    </code></pre>
    <h3><i>Result:</i></h3>
    <?php
        $counter --;

        echo "Decrease by 1 the Counter, New counter value is back to: " . $counter;
    ?>
    <hr>
</div>

</body>
</html>