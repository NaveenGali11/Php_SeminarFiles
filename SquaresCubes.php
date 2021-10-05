<?php
    function calcSquare(int $num){
        $square = $num * $num;
        echo "The Square of ".$num." is ".$square;
        return;
    }

    function calcCube(int $num) {
        $cube = $num * $num * $num;
        echo "The Cube of ".$num." is ".$cube;
        return;
    }

    calcSquare(3);
    calcCube(3);

?>