<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Operator</title>
</head>
<body>
    <h1>Comparison Operator</h1>
    <!--
        ==  Equal
        === Data/Value Identical
        !=  /  < >   /   !==    Not Equal To
        > Greater than
        < Less than
        >= Greater Than or Equal
        <= Less than or Equal
    -->
<div>
    <h3>Equal to ==</h3>
    <p>Use Operator to check if the PHP Version matches</p>

    <pre>
        <code>
        $php_version = 7.5;
        $php_system_version = PHP_MAJOR_VERSION . "." . PHP_MINOR_VERSION;
        
        echo $php_system_version;
        echo "<\br>";
        echo ($php_version == $php_system_version)? "Version Match" : "Version don't match, current PHP version is: " . $php_version . " , Please Update to most recent version";
        </code>
    </pre>

    <h3><i>Result:</i></h3>

    <?php
        $php_version = 7.5;
        $php_system_version = PHP_MAJOR_VERSION . "." . PHP_MINOR_VERSION;
        
        echo $php_system_version;
        echo "<br>";
        echo ($php_version == $php_system_version)? "Version Match" : "Version don't match, current PHP version is: " . $php_version . " , Please Update to most recent version";

    ?>
</div>
<hr>
<div>
    <h3>Data Type and Value Identical ===</h3>
    <p>Data and Value need to match</p>

    <pre>
        <code>
        $name1 = "10";
        $name2 = 10;

        echo ($name1 === $name2) ? "Name1 and Name2 matched" : "Name1 does not match Name2";
        </code>
    </pre>

    <h3><i>Result:</i></h3>

    <?php
        $name1 = "10";
        $name2 = 10;

        echo ($name1 === $name2) ? "Name1 and Name2 matched" : "Name1 does not match Name2";
    ?>
</div>
    

</body>
</html>