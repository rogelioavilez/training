<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <h1>Test</h1>

    <h3>1) Define and Assign $firstname and $lastname variable with your name.</h3>

    <pre>
        <code>
            $firstname = "Rogelio";
            $lastname = "Avilez Garza";
        </code>
    </pre>
    <?php
        $firstname = "Rogelio";
        $lastname = "Avilez Garza";
    ?>
    
    <hr>
    <h3>2) Print the $firstname and $lastname using echo/print.</h3>

    <pre>
        <code>
            echo "My Full Name is: " . $firstname . " " . $lastname . "<\br>";
            print "My Full Name is: " . $firstname . " " . $lastname;
        </code>
    </pre>
    <h3>Result:</h3>
    <?php
        echo "My Full Name is: " . $firstname . " " . $lastname . "<br>";
        print "My Full Name is: " . $firstname . " " . $lastname;
    ?>

    <hr>
    <h3>3) Embed the Variable in double quotes.</h3>

    <pre>
        <code>
            $numberToAdd = "3";
            echo 3 + $numberToAdd;
        </code>
    </pre>
    <h3>Result:</h3>
    <?php

        $numberToAdd = "3";
        echo 3 + $numberToAdd;
    ?>

    <hr>
    <h3>4) Define a function to print the name.</h3>

    <pre>
        <code>
            function print_name(){
                $name = "Rogelio Avilez Garza";
                echo $name;
            }

            print_name();
        </code>
    </pre>
    <h3>Result:</h3>
    <?php
        function print_name(){
            $name = "Rogelio Avilez Garza";
            echo $name;
        }

        print_name();
    ?>

    <hr>
    <h3>5) Show PHP Variables are Case Sensitive.</h3>

    <pre>
        <code>
            $flavour = "Chocolate";

            echo "Properly Spelled Variable: " . $flavour;
            echo "<\br>";
            echo "Not Properly Spelled Variable is Blank: -> " . $Flavour;
        </code>
    </pre>
    <h3>Result:</h3>
    <?php
        $flavour = "Chocolate";

        echo "Properly Spelled Variable: " . $flavour;
        echo "<br>";
        echo "Not Properly Spelled Variable is Blank: -> " . $Flavour;
    ?>

    <hr>
    <h3>6) Create local variable and repeat it inside a function with different value and print both.</h3>

    <pre>
        <code>
            $classroom = "Science";

            function print_classroom(){
                $classroom = "Mathematics";
                echo $classroom;
            }

            print_classroom();
            echo "<\br>";
            echo $classroom;
        </code>
    </pre>
    <h3>Result:</h3>
    <?php
        $classroom = "Science";

        function print_classroom(){
            $classroom = "Mathematics";
            echo $classroom;
        }

        print_classroom();
        echo "<br>";
        echo $classroom;
    ?>

    <hr>    
    <h3>7) Define and show a Global Variable.</h3>

    <pre>
        <code>
            global $schoolName;
            $schoolName = "Great School";

            function print_global(){
                global $schoolName;
                echo $schoolName;
            }
            print_global();
        </code>
    </pre>
    <h3>Result:</h3>
    <?php
        global $schoolName;
        $schoolName = "Great School";

        function print_global(){
            global $schoolName;
            echo $schoolName;
        }
        print_global();
    ?>

    <hr>    
    <h3>8) Define and show a Static Variable.</h3>

    <pre>
        <code>
            function print_static(){
                static $addStudent = 1;
                echo $addStudent . "<\br>";
                $addStudent += 1;
            }
            print_static();
            print_static();
            print_static();
            print_static();
        </code>
    </pre>
    <h3>Result:</h3>
    <?php
        function print_static(){
            static $addStudent = 1;
            echo $addStudent . "<br>";
            $addStudent += 1;
        }
        print_static();
        print_static();
        print_static();
        print_static();
    ?>

    <hr>    
    <h3>9) Show a Super Global Variable.</h3>

    <pre>
        <code>
            Getting the global from previous example:

            echo $GLOBALS ["schoolName"];
        </code>
    </pre>
    <h3>Result:</h3>
    <?php
        echo $GLOBALS ["schoolName"];
    ?>

<hr>    
    <h3>10) Define and Show a Variable of Variables.</h3>

    <pre>
        <code>
            vehicles is a variale:
            $vehicles = "BMW, Audi, Ford, GMC";

            Inventory is holding a variable vehicles
            $inventory = "vehicles";

            echo $inventory;
            echo "<\br>";
            echo $$inventory;
            
             //$($inventory) ==> $(vehicles)
        </code>
    </pre>
    <h3>Result:</h3>
    <?php
        $vehicles = "BMW, Audi, Ford, GMC";
        $inventory = "vehicles";

        echo $inventory;
        echo "<br>";
        echo $$inventory;
    ?>
    
</body>
</html>