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

    <h3></h3>
    <p>Use Equal to == Operator to check the PHP Version</p>

    <pre>
        <code>
        $php_version = 7.5;
        $php_system_version = PHP_MAJOR_VERSION . "." . PHP_MINOR_VERSION;
        
        echo $php_system_version;
        echo "<\br>";
        echo ($php_version == $php_system_version)? "Version Match" : "Version don't match";
        </code>
    </pre>

    <h3><i>Result:</i></h3>

    <?php
        $php_version = 7.5;
        $php_system_version = PHP_MAJOR_VERSION . "." . PHP_MINOR_VERSION;
        
        echo $php_system_version;
        echo "<br>";
        echo ($php_version == $php_system_version)? "Version Match" : "Version don't match";

    ?>

</body>
</html>