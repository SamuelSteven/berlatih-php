<?php
    function skor_terbesar($arr){
        $result = [];
        for ($i=0; $i<count($arr);$i++){
            $class = $arr[$i]['kelas'];
            if (array_key_exists($class, $result)){ 
                if ($result[$class]['nilai'] < $arr[$i]['nilai']){
                    $result[$class] = $arr[$i];
                }
            }
            else{$result[$class] = $arr[$i];}
        }
        return $result;
    }

    // TEST CASES
    $skor = [
    [
        "nama" => "Bobby",
        "kelas" => "Laravel",
        "nilai" => 78
    ],
    [
        "nama" => "Regi",
        "kelas" => "React Native",
        "nilai" => 86
    ],
    [
        "nama" => "Aghnat",
        "kelas" => "Laravel",
        "nilai" => 90
    ],
    [
        "nama" => "Indra",
        "kelas" => "React JS",
        "nilai" => 85
    ],
    [
        "nama" => "Yoga",
        "kelas" => "React Native",
        "nilai" => 77
    ],
    ];

    print_r(skor_terbesar($skor));

    /* OUTPUT
    Array (
    [Laravel] => Array
        (
        [nama] => Aghnat
        [kelas] => Laravel
        [nilai] => 90
        )
    [React Native] => Array
        (
        [nama] => Regi
        [kelas] => React Native
        [nilai] => 86
        )
    [React JS] => Array
        (
        [nama] => Indra
        [kelas] => React JS
        [nilai] => 85
        )
    )
    */
?>
