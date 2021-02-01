<?php
    function tentukan_deret_aritmatika($arr){
        $len = count($arr);
        $b = $arr[1] - $arr[0];
        if($len == 1) return "true";
        for($i=0;$i<$len;$i++){
            if($arr[$i] != $arr[0]+(($i+1)-1)*$b){
                return "false";
            }
        }
        return "true";
    }
    // TEST CASES
    echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
    echo "<br>";
    echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
    echo "<br>";
    echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
    echo "<br>";
    echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
    echo "<br>";
    echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false

?>