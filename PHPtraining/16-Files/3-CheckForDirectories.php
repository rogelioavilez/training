<h1>Check for Directories inside other Directories</h1>

<?php

$path = "../../files/TestFolder1";

foreach($directory as $dir){

    if(is_dir($path . "/" .$dir)){

        echo $dir . "<br>";

    }

}