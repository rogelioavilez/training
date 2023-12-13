<?php

    function custom_ex_handler($exception){

        echo "Caught Exception: " . $exception->getMessage();
    
    }

    function printEvenNumbers($start, $end) {

        if ($start <= 0 || $end <= 0 || $start == $end) {

            throw new Exception("Incorrect Input Parameters");

        }

        for (;$start<=$end; $start++){

            if ($start%2==0){

                echo "Even Number: $start";

            }

        }

    }

    set_exception_handler('custom_ex_handler');
    printEvenNumbers(0 , 20);