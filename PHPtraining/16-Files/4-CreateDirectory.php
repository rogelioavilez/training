<h1>Create a Directory</h1>

<?php

    $path = "../../files/TestFolder1";
    $result = scandir($path);
    var_dump($result);

    if(!file_exists($result . "/" . "TestFolder3")){
        mkdir("TestFolder3");
    }