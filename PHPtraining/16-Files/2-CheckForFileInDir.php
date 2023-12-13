<h1>Check for file in Directory</h1>

<?php

    $path = "../../files/TestFolder1";
    $directory = scandir($path);
    echo $directory . "<br>";
    
    $directory = array_diff($directory, ['.', '..']);

    foreach($directory as $dir){

        if(is_file($path . "/" .$dir)){

            echo $dir . "<br>";

        }

    }