<?php
    function arrayMap($arr,$fn){
        $arr2 = [];
        for($i = 0;$i < sizeof($arr);$i++ ){
            $arr2[$i] = $fn($arr[$i]);
        }
        return $arr2;
    }

    $arr = [1,2,3,4,5];
    $userDefined = function($item){
        return $item * $item;
    };

    $NewArray = arrayMap($arr,$userDefined);

    echo "<pre>";
    print_r($NewArray);
    echo "</pre>";
?>