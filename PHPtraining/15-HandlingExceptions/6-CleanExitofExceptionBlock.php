<?php
    try{

        throw new Exception("Raised and Exception<br>");

    } catch(Exception $e){

        echo $e->getMessage();

    }finally{

        echo "This block can be used as a cleanup section";

    }