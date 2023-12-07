<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HereDoc</title>
</head>
<body>
    <h1>HereDoc</h1>
    <pre>
        * Write a block of strings with HereDoc.
    </pre>
    <hr>
    <div>
        <h3>Example 1:</h3>
        <p>
            Write a block of strings.
        </p>
        <pre><code>
            $name = "Rogelio Avilez";
            $number = 10;

            echo <<< DOC_LABEL
            You can write anything inside this
            "Double Quotes" . Anything
            'Single Quotes' ... . . . .
            $name know how to write PHP
            ($number * 10)
            New lines and Strings.
            (true) ? "Some Efect" : "No Efect";
            <\strong> Is this Bold <\/strong>
            Apart from variable nothing will work.

            DOC_LABEL;
        </code></pre>
        <h3><i>Result:</i></h3>
        <?php
            $name = "Rogelio Avilez";
            $number = 10;

            echo <<< DOC_LABEL
            You can write anything inside this
            "Double Quotes" . Anything
            'Single Quotes' ... . . . .
            $name know how to write PHP
            ($number * 10)
            New lines and Strings.
            (true) ? "Some Efect" : "No Efect";
            <strong> Is this Bold </strong>
            Apart from variable nothing will work.

            DOC_LABEL;

        ?>
    </div>
    
</body>
</html>