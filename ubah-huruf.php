<?php
    function ubah_huruf($string){
        $len = strlen($string);
        $word = '';
        for($i=0;$i<$len;$i++){
            $char = ord($string[$i])+1;
            $word .= chr($char);
        }
        return $word;
    }
    // TEST CASES
    echo ubah_huruf('wow'); // xpx
    echo "<br>";
    echo ubah_huruf('developer'); // efwfmpqfs
    echo "<br>";
    echo ubah_huruf('laravel'); // mbsbwfm
    echo "<br>";
    echo ubah_huruf('keren'); // lfsfo
    echo "<br>";
    echo ubah_huruf('semangat'); // tfnbohbu


?>