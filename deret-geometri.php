<?php
    function tentukan_deret_geometri($arr){
        $len = count($arr);
        $r = $arr[1]/$arr[0];
        if($len == 1) return "true";
        for($i=0;$i<$len;$i++){
            if($arr[$i] != $arr[0]*(pow($r,$i))){
                return "false";
            }
        }
        return "true";
    }
    // TEST CASES
    echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
    echo "<br>";
    echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
    echo "<br>";
    echo tentukan_deret_geometri([2, 4, 6, 8]); // false
    echo "<br>";
    echo tentukan_deret_geometri([2, 6, 18, 54]); // true
    echo "<br>";
    echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false

?>