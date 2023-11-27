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

    <!-- ==  Equal -->
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
    <!-- === Data/Value Identical -->
<div>
    <h3>Data Type and Value Identical ===</h3>
    <p>Data Type and Value need to be identical</p>

    <pre>
        <code>
        $name1 = "10";
        $name2 = 10;
        $name3 = "10";

        echo ($name1 === $name2) ? "Name1 and Name2 matched" : "Name1 does not match Name2";
        echo "<\br>";
        echo ($name1 === $name3) ? "Name1 and Name3 matched" : "Name1 does not match Name3";
        </code>
    </pre>

    <h3><i>Result:</i></h3>

    <?php
        $name1 = "10";
        $name2 = 10;
        $name3 = "10";

        echo ($name1 === $name2) ? "Name1 and Name2 matched" : "Name1 does not match Name2";
        echo "<br>";
        echo ($name1 === $name3) ? "Name1 and Name3 matched" : "Name1 does not match Name3";
    ?>
</div>
<hr>
    <!-- !=  /  < >   /   !==    Not Equal To -->
<div>
    <h3>Not Equal To !=  ,  < >   ,   !== </h3>
    <p>Find oranges using !=  ,  < >   ,   !== </p>

    <pre>
        <code>
        $specialFruit = "Oranges";
        $fruit1 = "Apple";
        $fruit2 = "Oranges";

        echo ($specialFruit != $fruit1) ? "Fruit1 is not Oranges" : "Fruit1 is Oranges";
        echo "<\br>";
        echo ($specialFruit != $fruit2) ? "Fruit2 is not Oranges" : "Fruit2 is Oranges";
        </code>
    </pre>

    <h3><i>Result:</i></h3>

    <?php
        $specialFruit = "Oranges";
        $fruit1 = "Apple";
        $fruit2 = "Oranges";

        echo ($specialFruit != $fruit1) ? "Fruit1 is not Oranges" : "Fruit1 is Oranges";
        echo "<br>";
        echo ($specialFruit != $fruit2) ? "Fruit2 is not Oranges" : "Fruit2 is Oranges";
    ?>
</div>
<hr>
<!-- > Greater Than -->
<div>
    <h3>Greater than ></h3>
    <p>Find the senior citizen whose age is greater than 60 using greater than operator</p>

    <pre>
        <code>
        $citizen1 = "Jhon";
        $citizen1 = "Mark";
        $citizen1 = "Luke";

        $ageLimit = 60;
        $citizenAge1 = 40;
        $citizenAge2 = 64;
        $citizenAge3 = 80;

        echo ($citizenAge1 > $ageLimit) ? $citizen1 . " is a Senior Citizen" : $citizen1 . " is not a Senior Citizen";
        echo "<\br>";
        echo ($citizenAge2 > $ageLimit) ? $citizen2 . " is a Senior Citizen" : $citizen2 . " is not a Senior Citizen";
        echo "<\br>";
        echo ($citizenAge3 > $ageLimit) ? $citizen3 . " is a Senior Citizen" : $citizen3 . " is not a Senior Citizen";
        </code>
    </pre>

    <h3><i>Result:</i></h3>

    <?php
        $citizen1 = "Jhon";
        $citizen2 = "Mark";
        $citizen3 = "Luke";

        $ageLimit = 60;
        $citizenAge1 = 40;
        $citizenAge2 = 64;
        $citizenAge3 = 80;

        echo ($citizenAge1 > $ageLimit) ? $citizen1 . " is a Senior Citizen" : $citizen1 . " is not a Senior Citizen";
        echo "<br>";
        echo ($citizenAge2 > $ageLimit) ? $citizen2 . " is a Senior Citizen" : $citizen2 . " is not a Senior Citizen";
        echo "<br>";
        echo ($citizenAge3 > $ageLimit) ? $citizen3 . " is a Senior Citizen" : $citizen3 . " is not a Senior Citizen";
    ?>
</div>
<hr>
<!-- < Less Than -->
<div>
    <h3>Less than < </h3>
    <p>Find the kids that are getting pizza for free</p>

    <pre>
        <code>
        $name1 = "Jhonny";
        $name2 = "Markus";
        $name3 = "Lukas";

        $ageLimit = 10;
        $nameAge1 = 4;
        $nameAge2 = 64;
        $nameAge3 = 8;

        echo ($nameAge1 < $ageLimit) ? $name1 . " gets to eat pizza for free" : $name1 . " doesn't get pizza";
        echo "<\br>";
        echo ($nameAge2 < $ageLimit) ? $name2 . " gets to eat pizza for free" : $name2 . " doesn't get pizza";
        echo "<\br>";
        echo ($nameAge3 < $ageLimit) ? $name3 . " gets to eat pizza for free" : $name3 . " doesn't get pizza";
        </code>
    </pre>

    <h3><i>Result:</i></h3>

    <?php
        $name1 = "Jhonny";
        $name2 = "Markus";
        $name3 = "Lukas";

        $ageLimit = 10;
        $nameAge1 = 4;
        $nameAge2 = 64;
        $nameAge3 = 8;

        echo ($nameAge1 < $ageLimit) ? $name1 . " gets to eat pizza for free" : $name1 . " doesn't get pizza";
        echo "<br>";
        echo ($nameAge2 < $ageLimit) ? $name2 . " gets to eat pizza for free" : $name2 . " doesn't get pizza";
        echo "<br>";
        echo ($nameAge3 < $ageLimit) ? $name3 . " gets to eat pizza for free" : $name3 . " doesn't get pizza";
    ?>
</div>
<hr>

</body>
</html>