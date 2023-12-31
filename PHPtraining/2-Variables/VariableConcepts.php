<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concepts</title>
</head>
<body>

    <h1>Variable Concepts</h1>
    <hr>
    <!-- Define a Variable -->
    <h3>Define a variable:</h3>
    <p>
        $name = "Rogelio, Avilez";<br>
        echo $name;<br>
        <i>Result:</i><br>
    </p>
    <br>
    <?php 
        $name = "Rogelio, Avilez";
        echo $name;
    ?>

    <hr>
    <!-- Variable can be used as string and integer -->
    <h3>Variable can be used as String and Integer:</h3>
    <p>
        $message = 1;<br>
        $message = "PHP is the Best!";<br>
        echo $message;<br>
        <i>Result:</i><br>
    </p>
    <br>
    <?php 
        $message = 1;
        $message = "PHP is the Best!";
        echo $message;
    ?>

    <hr>
    <!-- Print Variable with Double Quotes -->
    <h3>Print Variable with Double Quotes:</h3>
    <p>
        echo "Name variable = $name";<br>
        echo 'Name variable = $name';<br>
        <i>Result:</i><br>
    </p>
    <br>
    <?php 
        echo "Name variable = $name" . "<br>";
        echo 'Name variable = $name';
    ?>

    <hr>
    <!-- Variable Typing converting the String into Integer and Viceversa -->
    <h3>Variable Typing converting the String into Integer and Viceversa:</h3>
    <p>
        $lenght = "10";<br>
        $width = 20;<br>
        $area = $lenght * $width;<br>
        echo "Area: $area";<br>
        <i>Result:</i><br>
    </p>
    <br>
    <?php 
        $lenght = "10";
        $width = 20;
        $area = $lenght * $width;
        echo "Area: $area";
    ?>

    <hr>
    <!-- Variables are case sensitive -->
    <h3>Variables are case sensitive:</h3>
    <p>
        $Name = "Walter White";<br>
        echo "$name is not equal to $Name";<br>
        <i>Result:</i><br>
    </p>
    <br>
    <?php 
        $Name = "Walter White";
        echo "$name is not equal to $Name";
    ?>

    <hr>
    <!-- Variable Scope -->
    <h3>Variable Scope:</h3>
    <p>
        $counter = 1;<br>
        function show_counter(){<br>
            $counter = 2;<br>
            echo $counter;<br>
        }<br>
        show_counter();<br>
        echo $counter;<br>
        <i>Result:</i><br>
    </p>
    <br>
    <?php 
        $counter = 1;
        function show_counter(){
            $counter = 2;
            echo $counter;
        }
        show_counter();
        echo $counter;
    ?>

    <hr>
    <!-- Global Variables -->
    <h3>Global Variables:</h3>
    <p>
        global $count;<br>
        global $count = 1;<br>
        function show_count(){<br>
            global $count;<br>
            $count = 2;<br>
            echo $count;<br>
        }<br>
        show_count();<br>
        echo $count;<br>
        <i>Result:</i><br>
    </p>
    <br>
    <?php 
        global $count;
        $count = 1;
        function show_count(){
            global $count;
            $count = 2;
            echo $count;
        }
        show_count();
        echo $count;
    ?>

    <hr>
    <!-- Static Variables -->
    <h3>Static Variables:</h3>
    <p>
        function counter_static(){<br>
            static $count = 1;<br>
            echo $count;<br>
            $count = $count + 1;<br>
        }<br>
        counter_static();<br>
        counter_static();<br>
        counter_static();<br>
        <i>Result:</i><br>
    </p>
    <br>
    <?php 
        
        function counter_static(){
            static $count = 1;
            echo $count;
            $count = $count + 1;
        }
        counter_static();
        counter_static();
        counter_static();
    ?>

    <hr>
    <!-- Predefined Variables -->
    <h3>Predefined Variables:</h3>
    <p>
        function print_global_variables(){<br>
            echo $GLOBALS['count'];<br>
        }<br>
        print_global_variables();<br>
        <i>Result:</i><br>
    </p>
    <br>
    <?php 
        function print_global_variables(){
            echo $GLOBALS['count'];
        }
        print_global_variables();
    ?>

    <hr>    
    <!-- Variable of Variables -->
    <h3>Variable of Variables:</h3>
    <p>
        $countofcount = $count;<br>
        echo $countofcount;<br>
        <i>Result:</i><br>
    </p>
    <br>
    <?php 
        $countofcount = $count;
        echo $countofcount;
    ?>

    <hr>    
    <!-- Isset Function -->
    <h3>Isset Function:</h3>
    <p>
        echo isset($countofcount) ? "Variable is Set" : "Variable is Not Set";<br>
        <i>Result:</i><br>
    </p>
    <br>
    <?php 
        echo isset($countofcount) ? "Variable is Set" : "Variable is Not Set";
    ?>
     
</body>
</html>