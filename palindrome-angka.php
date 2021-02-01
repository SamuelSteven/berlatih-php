<?php
    function palindrome_angka($angka){
        if($angka <= 9) {
            $result = $angka + 1;
        }
        else if($angka >= 10){
            $loop = true;
            do{
                $angka += 1;
                if(strval($angka) === strrev(strval($angka))){
                    $result = $angka;
                    $loop = false;
                }
            }while($loop == true);
        }

        return $result;
    }

    echo palindrome_angka(8); // 9
    echo "<br>";
    echo palindrome_angka(10); // 11
    echo "<br>";
    echo palindrome_angka(117); // 121
    echo "<br>";
    echo palindrome_angka(175); // 181
    echo "<br>";
    echo palindrome_angka(1000); // 1001
?>