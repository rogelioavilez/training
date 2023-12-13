<h1>Create a Directory</h1>

<?php

    $path = "../../files/TestFolder1";
    $result = scandir($path);

    $result = glob("*.php");
    var_dump($result);

    if(!file_exists("TestFolder3")){
        mkdir("TestFolder3");
    }