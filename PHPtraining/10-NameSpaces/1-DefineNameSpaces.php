<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Define Name Spaces</title>
</head>
<body>
    <h1>Define Name Spaces</h1>

    <pre>
        * Namespaces are case insensitive.
        * Namespaces are used to avoid name collition between other libraries.
        * Namespace is the keyboard used to define namespace.
        * Only Classes, Interface, Functions and Constants should be defined in Namespaces.
        * Namespace should always be first in line.
        * include is used to include any file into another file.
        * Use backslash to refer to subdirectories or file name.
    </pre>

    <h3>Namespaces are case insensitive</h3>
    <pre>
        <code>
        namespace myconstants;

        const FILE_NAME = "NamespaceConstants.php";
        </code>
    </pre>
    <h3><i>Result:</i></h3>

    <?php
        include "NamespaceConstants.php";

        echo myconstants\FILE_NAME;
    ?>

    </body>
</html>