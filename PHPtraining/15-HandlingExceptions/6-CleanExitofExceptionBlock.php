<?php
    try{

        throw new Exception("Raise and Exception");

    } catch(Exception $e){

        echo $e->getMessage();

    }finally{

        echo "This block can be used as a cleanup section";
        
    }