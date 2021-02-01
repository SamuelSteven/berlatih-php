<?php
    function pasangan_terbesar($angka){
        $strAngka = strval($angka);
        $max = $strAngka[0] . $strAngka[1];
        for($i=1;$i<strlen($strAngka);$i++){
            if($i!=strlen($strAngka)-1 && $max < $strAngka[$i].$strAngka[$i+1]){
                $max = $strAngka[$i].$strAngka[$i+1];
            }
        }
        // $splitStr = str_split((strval($angka)));
        // max($splitStr);
        return $max;
    }
    $test = "oke";
    // TEST CASES
    echo pasangan_terbesar(641573); // 73
    echo "<br>";
    echo pasangan_terbesar(12783456); // 83
    echo "<br>";
    echo pasangan_terbesar(910233); // 91
    echo "<br>";
    echo pasangan_terbesar(71856421); // 85
    echo "<br>";
    echo pasangan_terbesar(79918293); // 99

?>