<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NowDoc</title>
</head>
<body>
    <h1>NowDoc</h1>
    <hr>
    <div>
        <h3>Example 1:</h3>
        <p>
            Write a block of String using NowDoc.
        </p>
        <pre><code>
            $name = "Rogelio Avilez";
            $number = 10;

            //Use of single quotes in the Label turns a hereDoc into a nowDoc.
            echo <<< 'DOC_LABEL'
            You can write anything inside this
            "Double Quotes" . Anything
            'Single Quotes' ... . . . .
            $name know how to write PHP
            ($number * 10)
            New lines and Strings.
            (true) ? "Some Efect" : "No Efect";
            <strong> Is this Bold </strong>

            Even the variable substitution will Not work.

            DOC_LABEL;
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $name = "Rogelio Avilez";
            $number = 10;

            echo <<< 'DOC_LABEL'
            You can write anything inside this
            "Double Quotes" . Anything
            'Single Quotes' ... . . . .
            $name know how to write PHP
            ($number * 10)
            New lines and Strings.
            (true) ? "Some Efect" : "No Efect";
            <strong> Is this Bold </strong>

            Even the variable substitution will Not work.

            DOC_LABEL;

        ?>
    </div>
    
</body>
</html>