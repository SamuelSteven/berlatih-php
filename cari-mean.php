<?php
    function cari_mean($arr){
        $mean = ceil(array_sum($arr)/count($arr));
        return $mean;
    }
    // TEST CASE
    echo cari_mean([1, 2, 3, 4, 5]); // 3
    echo "<br>";
    echo cari_mean([3, 5, 7, 5, 3]); // 5
    echo "<br>";
    echo cari_mean([6, 5, 4, 7, 3]); // 5
    echo "<br>";
    echo cari_mean([1, 3, 3]); // 2
    echo "<br>";
    echo cari_mean([7, 7, 7, 7, 7]); // 7
?>