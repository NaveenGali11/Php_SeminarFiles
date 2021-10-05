<?php
    function addFunction($v1,$v2){
        return $v1 + $v2;
    };
    $arr = array(1,32,653);
    print_r(array_reduce($arr,"addFunction"));
?>