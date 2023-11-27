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
            $totalMarks = ($math + $science + $english)/3;

            echo $totalMarks;
            </code>
        </pre>
        <h3><i>Result:</i></h3>
        <?php
            $math = 70;
            $science = 30;
            $english = 80;
            $totalMarks = ($math + $science + $english)/3;

            echo $totalMarks;
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
            $difMarks = $allMarks - $totalMarks;

            echo "Need " . $difMarks . " points for a perfect score.";
            </code>
        </pre>
        <h3><i>Result:</i></h3>
        <?php
            $allMarks = 100;
            $difMarks = $allMarks - $totalMarks;

            echo "Need " . $difMarks . " points for a perfect score.";
        ?>

    </div>

    <hr>
    <!-- Multiplication (*) -->
    <div>
        <h3>Multiplication *</h3>
        <p>Find the difference between Student's total marks, and maximum amount of Marks</p>

        <pre>
            <code>
            $allMarks = 100;
            $difMarks = $allMarks - $totalMarks;

            echo "Need " . $difMarks . " points for a perfect score.";
            </code>
        </pre>
        <h3><i>Result:</i></h3>
        <?php
            $allMarks = 100;
            $difMarks = $allMarks - $totalMarks;

            echo "Need " . $difMarks . " points for a perfect score.";
        ?>

    </div>
    
    
</body>
</html>