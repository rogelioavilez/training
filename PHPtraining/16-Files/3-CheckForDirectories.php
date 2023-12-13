<h1>Check for Directories inside other Directories</h1>

<?php

    $path = "../../files/TestFolder1";
    $folders = scandir($path);
    
    $folders = array_diff($folders, ['.', '..']);
    var_dump($directory);

    foreach($folders as $dir){

        if(is_dir($path . "/" .$dir)){

            echo $dir . "<br>";

        }

    }