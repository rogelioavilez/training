
<?php

    include "10.1-header.php";
?>

<body>

    <h1>** After an error, require will stop loading and any items after will be dismissed.</h1>

    <?php
        include "10.2-menu.php";
        require "10.2-submenu.php";

    ?>
    <pre><code>
    include "10.2-submenu.php";
    </code></pre>

    <?php
        include "10.3-footer.php";
    ?>

</body>

</html>