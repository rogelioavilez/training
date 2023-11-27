<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetical Operator</title>
</head>
<body>
    <h1>Arithmetical Operator</h1>

    <!--
        Addition        +
        Substraction    -
        Multiplication  *
        Division        /
        Modulus         %
        Exponentiation  **
    -->

    <!-- Addition (+) -->
    <div>
        <h3>Addition +</h3>
        <p>Calculate a Student's total marks for 3 Subjects</p>

        <pre>
            <code>
            $math = 70;
            $science = 30;
            $english = 80;
            $totalMarkPoints = $math + $science + $english;

            echo $totalMarkPoints;
            </code>
        </pre>
        <h3><i>Result:</i></h3>
        <?php
            $math = 70;
            $science = 30;
            $english = 80;
            $totalMarkPoints = $math + $science + $english;

            echo $totalMarkPoints . " out of 300.";
        ?>

    </div>

    <hr>
    <!-- Substraction (-) -->
    <div>
        <h3>Substraction -</h3>
        <p>Find the difference between Student's total marks, and maximum amount of Marks</p>

        <pre>
            <code>
            $allMarks = 100;
            $difMarks = $allMarks - $totalMarkPoints;

            echo "Need " . $difMarks . " points for a perfect score.";
            </code>
        </pre>
        <h3><i>Result:</i></h3>
        <?php
            $allMarks = 300;
            $difMarks = $allMarks - $totalMarkPoints;

            echo "Need " . $difMarks . " points for a perfect score.";
        ?>

    </div>

    <hr>
    <!-- Multiplication (*) -->
    <div>
        <h3>Multiplication *</h3>
        <p>Calculate the area, using lenght and width.</p>

        <pre>
            <code>
            $lenght = 10;
            $width = 20;
            $area = $lenght * $width;

            echo "The total area when you have " . $lenght . "ft in lenght, and " . $width . "ft in width is: " . $area . "ft<sup>2";
            </code>
        </pre>
        <h3><i>Result:</i></h3>
        <?php
            $lenght = 10;
            $width = 20;
            $area = $lenght * $width;

            echo "The total area when you have " . $lenght . "ft in lenght, and " . $width . "ft in width is: " . $area . "ft<sup>2";
        ?>

    </div>

    <hr>
    <!-- Division (/) -->
    <div>
        <h3>Division /</h3>
        <p>Calculate the percentage on Overall Score</p>

        <pre>
            <code>
            $percentage = ($totalMarkPoints/$allMarks)*100;
            </code>
        </pre>
        <h3><i>Result:</i></h3>
        <?php
            $percentage = ($totalMarkPoints/$allMarks)*100;

            echo "Percentage Scored: " . $percentage . "%";
        ?>

    </div>

    <hr>
    <!-- Modulus (%) -->
    <div>
        <h3>Modulus %</h3>
        <p>Find the reminder of an operation</p>

        <pre>
            <code>
            $a = 100 % 5;
            echo $a;
            echo "<\br>";
            $b = 101 % 5;
            echo $b;
            </code>
        </pre>
        <h3><i>Result:</i></h3>
        <?php
        $a = 100 % 5;
        echo $a;
        echo "<br>";
        $b = 101 % 5;
        echo $b;
        ?>

    </div>
    
    
</body>
</html>