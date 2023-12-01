<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Define Name Spaces</title>
</head>
<body>
    <h1>Define Sub Namespaces</h1>

    <pre>
        * 
    </pre>

    <h3>Sub Namespaces</h3>
    <pre>
        <code>
        include "NamespaceConstants1.php";

        echo SubNamespaces\Sub1\FILE_NAME;
        </code>
    </pre>
    <h3><i>Result:</i></h3>

    <?php
        include "NamespaceConstants1.php";

        echo "SubNamespaces\Sub1\FILE_NAME";
    ?>

    </body>
</html>