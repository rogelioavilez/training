<?php

    echo "<h1>File Directory</h1>
    <hr>
    <h3>Sample 1: get Array of Contents inside \"TestFolder1\" using path</h3>";

    $path = "../../files/TestFolder1";
    $result = scandir($path);
    var_dump($result);

    echo "<hr>
    <h3>Sample 2: Remove Array by deleting the dots \" . \" from files' path</h3>";

    $path2 = "../../files/TestFolder1";
    $result = scandir($path2);
    
    foreach($result as $dir){

        if($dir != "." && $dir != ".."){

            echo $dir . "<br>";

        }

    }
