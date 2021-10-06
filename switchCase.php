<?php
    function switchTo($case){
          switch($case){
            case "Lower" : 
                echo "Lower Chosen";
            break;
            case "Upper" : 
                echo "Upper Chosen";
            break;
        }
    
    };

    switchTo("Upper");
?>