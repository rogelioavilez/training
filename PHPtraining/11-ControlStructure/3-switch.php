<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statements</title>
</head>
<body>
    <h1>Switch Statements</h1>
    <hr>
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
</body>
</html>