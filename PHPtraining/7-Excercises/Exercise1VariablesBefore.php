<!doctype html>
<html>
<head>
    <title>
        Variables
    </title>
</head>
<body>

    <h1>Exercise 1: Create and Display Variables</h1>

    <h2>String Variable:</h2>
    <pre>
        <code>
            $varString = "First String Variable";

            echo "String Variable = " . $varString;
        </code>
    </pre>
    <h3><i>Result:</i></h3>
    <?php
        $varString = "First String Variable";

        echo "String Variable = " . $varString;
    ?>
    <hr>

    <h2>Integer Variable:</h2>
    <pre>
        <code>
            $varInteger = 10;

            echo "Integer Variable = " . $varInteger;
        </code>
    </pre>
    <h3><i>Result:</i></h3>
    <?php
        $varInteger = 10;

        echo "Integer Variable = " . $varInteger;
    ?>
    <hr>

    <h2>Print Variable from Function:</h2>
    <pre>
        <code>
            function print_variable(){<br>
                $varInsideFunction = "I'm Trapped Here";<br>
                echo $varInsideFunction;<br>
            }<br><br>
            
            print_variable();
        </code>
    </pre>
    <h3><i>Result:</i></h3>
    <?php

        function print_variable(){
            $varInsideFunction = "I'm Trapped Here";
            echo $varInsideFunction;
        }
        
        print_variable();
    ?>
    <hr>

    <h2>Static Variable:</h2>
    <pre>
        <code>
            function static_var(){<br>
                static $counter = 1;<br>
                echo $counter . "<\br>";<br>
                $counter = $counter + 1;<br>
            }<br>
            static_var();<br>
            static_var();<br>
            static_var();<br>
            static_var();
        </code>
    </pre>
    <h3><i>Result:</i></h3>
    <?php

        function static_var(){
            static $counter = 1;
            echo $counter . "<br>";
            $counter = $counter + 1;
        }
        static_var();
        static_var();
        static_var();
        static_var();
    ?>
    <hr>

    <h2>Global Variable:</h2>
    <pre>
        <code>
            global $global_var;
            $global_var = "Welcome to PHP from Global Variable";

            function print_global_var(){
                //$message1 global variable is detected if called inside function
                global $global_var;
                echo "Echo inside function: " . $global_var;
            }

            print_global_var();
            
            echo "<br>Echo outside function: " . $global_var;
        </code>
    </pre>
    <h3><i>Result:</i></h3>
    <?php
        global $global_var;
        $global_var = "Welcome to PHP from Global Variable";

        function print_global_var(){
            //$message1 global variable is detected if called inside function
            global $global_var;
            echo "Echo inside function: " . $global_var;
        }

        print_global_var();

        echo "<br>Echo outside function: " . $global_var;
    ?>
    <hr>

    <h2>Super Global Variable:</h2>

    <h2>Variables of Variables:</h2>

</body>
</html>

