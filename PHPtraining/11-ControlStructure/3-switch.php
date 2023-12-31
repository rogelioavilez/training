<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statements</title>
</head>
<body>
    <h1>Switch Statements</h1>
    <p>Make sure to use the breaks in between cases, as Switch does not have brackets to mark where one condition ends or other starts.</p>
    <hr>
    <!-- Example 1 -->
    <div>
        <pre><code>
            $input_number = 10;
            $result = $input_number % 2;

            if ( $result ){

                echo 'Odd Number in If Statement';

            } else if (!$result){

                echo 'Even Number in If Statement';

            } switch ($result) {

                case 1:
                    echo 'Odd Number in switch';
                    break;
                case 0:
                    echo 'Even Number in switch';
                    break;
                default:
                    echo 'Invalid Input';

            }
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $input_number = 10;
            $result = $input_number % 2;

            if ( $result ){

                echo 'Odd Number in If Statement';

            } else if (!$result){

                echo 'Even Number in If Statement';

            } switch ($result) {

                case 1:
                    echo 'Odd Number in switch';
                    break;
                case 0:
                    echo 'Even Number in switch';
                    break;
                default:
                    echo 'Invalid Input';

            }
        ?>
    </div>
    <hr>
    <!-- Example 2 -->
    <div>
        <pre><code>
            $input_number = 9;
            $result = $input_number % 2;

            if ( $result ){

                echo 'Odd Number in If Statement';

            } else if (!$result){

                echo 'Even Number in If Statement';

            } switch ($result) {

                case $input_number > 10:
                    echo '$input_number is greater than 10';
                    break;
                case $input_number == 10:
                    echo '$input_number is equal to 10';
                    break;
                default:
                    echo '$input_number is less than 10';

            }
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $input_number = 9;
            $result = $input_number % 2;

            if ( $result ){

                echo 'Odd Number in If Statement';

            } else if (!$result){

                echo 'Even Number in If Statement';

            } switch ($result) {

                case $input_number > 10:
                    echo '$input_number is greater than 10';
                    break;
                case $input_number == 10:
                    echo '$input_number is equal to 10';
                    break;
                default:
                    echo '$input_number is less than 10';

            }
        ?>
    </div>
    <hr>
    <!-- Example 3 -->
    <div>
        <h3>String Base Condition</h3>
        <pre><code>
            $weekday = "Fri";

            switch ($weekday){

                case "Mon":
                    echo 'Monday';
                    break;
                case "Fri":
                    echo 'Friday';
                    break;
                default:
                    echo 'Others';

            }
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $weekday = "Fri";

            switch ($weekday){

                case "Mon":
                    echo 'Monday';
                    break;
                case "Fri":
                    echo 'Friday';
                    break;
                default:
                    echo 'Others';

            }

        ?>
    </div>
</body>
</html>