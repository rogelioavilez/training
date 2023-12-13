<?php

    echo "<h1>File Directory</h1>
    <hr>
    <p>Sample 1: TestFolder1</p>";

    $path = "TestFolder1";
    $result = scandir($path);
    var_dump($result);
