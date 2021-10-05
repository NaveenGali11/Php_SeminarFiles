<?php
    $upperCase = function($data){
        return strtoupper($data);
    };

    $mixedCase = ["Hello ","World"];

    $uppercased = array_map($upperCase,$mixedCase);
    print_r($uppercased);
?>