<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If, Else, Statement</title>
</head>
<body>
    <h1>If, Else, Statement</h1>
    <pre>
        1) Syntax of If and Else Conditions
        2) Check if the inputs given by user is correct
        3) If condition statement without braces
        4) Check if student passed or failed.
    </pre>
    <hr>
    <!-- If, Else Statement -->
    <div>
        <h3>If, Else Statement</h3>
        <pre><code>
            $some_boolean_condition = FALSE;

            if ($some_boolean_condition) {
                echo "This is a If block condition";
                echo "This is a True Condition";
            } else {
                echo "This is an Else block condition";
                echo "This is a False Condition";
            }
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $some_boolean_condition = TRUE;

            if ($some_boolean_condition) {
        ?>
                <h4>This is a If block condition</h4>
                <p>This is a True Condition</p>
                <br>
        <?php
            } else {
        ?>
                <h4>This is an Else block condition</h4>
                <p>This is a False Condition</p>
        <?php
            }
        ?>
    </div>
    <hr>
    <!-- Check if Inputs given by user are correct -->
    <div>
        <h3>Check if Inputs given by user are correct</h3>
        <pre><code>
            $input1 = "Some Text for the User";

            $input2 = 34;

            if (isset($input1) && !is_null($input1)){
                echo '$input1 is not empty, the value is: ' . $input1;
            } else {
                echo '$input1 is not set or empty';
            }
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $input1 = "Some Text for the User";

            $input2 = 34;

            if (isset($input1) && !is_null($input1)){
                echo '$input1 is not empty, the value is: ' . $input1;
            } else {
                echo '$input1 is not set or empty';
            }
            
        ?>
    </div>
    <hr>
    <!-- If condition without braces -->
    <div>
        <h3>If condition without braces</h3>
        <pre><code>
        $some_boolean_condition = FALSE;

        if ($some_boolean_condition)
            echo "<h4>This is a If block condition without brackets</h4><p>This is a True Condition</p><br>";
        else
            echo "<h4>This is an Else block condition without brackets</h4><p>This is a False Condition</p>";
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $some_boolean_condition = FALSE;

            if ($some_boolean_condition)
                echo "<h4>This is a If block condition without brackets</h4><p>This is a True Condition</p><br>";
            else
                echo "<h4>This is an Else block condition without brackets</h4><p>This is a False Condition</p>";
        ?>
    </div>
    <hr>
    <!-- One Liner -->
    <div>
        <h3>One Liner</h3>
        <pre><code>
        $some_boolean_condition = FALSE; if ($some_boolean_condition) echo "<\h4>This is a If block condition written in one line</\h4><\p>This is a True Condition</\p><\br>"; else echo "<\h4>This is an Else block condition written in one line</\h4><\p>This is a False Condition</\p>";
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $some_boolean_condition = FALSE; if($some_boolean_condition)echo "<h4>This is a If block condition written in one line</h4><p>This is a True Condition</p><br>"; else echo "<h4>This is an Else block condition written in one line</h4><p>This is a False Condition</p>";
        ?>
    </div>
    <hr>
    <!-- Recommended Practice -->
    <div>
        <h3>Recommended Practice</h3>
        <pre><code>
        Always use brackets to have better visual organization, and provide space between variables, functions, and results.

            $some_boolean_condition = FALSE;

            if ($some_boolean_condition) {
                echo "<\h4>This is a If block condition written in Recommended Structure</\h4>
                <\p>This is a True Condition</\p><\br>"; 
            } else {
                echo "<\h4>This is an Else block condition written in Recommended Structure</\h4>
                <\p>This is a False Condition</\p>";
            }
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $some_boolean_condition = FALSE;

            if($some_boolean_condition){
                echo "<h4>This is a If block condition written in Recommended Structure</h4>
                <p>This is a True Condition</p><br>"; 
            }else { 
                echo "<h4>This is an Else block condition written in Recommended Structure</h4>
                <p>This is a False Condition</p>";
            }
        ?>
    </div>

    <hr>
    <div>
        <h3>Check if Student Passed or Failed</h3>
        <pre><code>
            $result = "No Test Results";
            $testScore = 70;
            if($testScore > 65){
                $result = "Student Passed";
            }else { 
                $result = "Student Failed";
            }

            echo $result;
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $result = "No Test Results";
            $testScore = 70;
            if($testScore > 65){
                $result = "Student Passed";
            }else { 
                $result = "Student Failed";
            }

            echo $result;
        ?>
    </div>
</body>
</html>