<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Split Array</title>
</head>
<body>
    <h1>Split Array</h1>
    <pre>
        * Use explode to get values from a Value into Arrays.
        *Use implode to get String values from Array.

    </pre>
    <hr>

    <!-- String to Array -->
    <div>
        <h3>Example 1: String to Array</h3>
        <pre><code>
            $students = "John, Roger, Anna, Jacob, Ruth";
            $studentArr = explode(",", $students);
            print_r($studentArr);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $students = "John, Roger, Anna, Jacob, Ruth";
            $studentArr = explode(",", $students);
            print_r($studentArr);
        ?>
    </div>

    <hr>

    <!-- Array to String -->
    <div>
        <h3>Example 1: String to Array</h3>
        <pre><code>
            $studentList = implode(",", $studentArr);
            print_r($studentArr);
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $studentArr = implode(",", $studentArr);
            print_r($studentList);
        ?>
    </div>


</body>
</html>