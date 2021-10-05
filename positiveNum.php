<?php
    function checkNum($var1){
        $result = $var1 > 0 ? "positive" :  "negative";
        echo "The Number ".$var1." is : ".$result;
        return;
    }

    checkNum(2300);
?>
