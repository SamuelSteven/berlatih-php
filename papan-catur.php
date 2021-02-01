<?php
    function papan_catur($angka){
        $chess = '';
        for($y=0;$y<$angka;$y++){
            if($y%2==0){
                for($x=0;$x<$angka;$x++){
                    $chess .= "#".str_repeat('&nbsp;', 2);
                }
                $chess .= "<br>";
            }
            else{
                for($x=1;$x<$angka;$x++){
                    $chess .= str_repeat('&nbsp;', 2)."#";
                }
                $chess .= "<br>";
            }
        }
        return $chess;
    }
    // TEST CASES
    // echo papan_catur(4);
    /*
    # # # #
     # # #   
    # # # #
     # # #
    */
    // echo papan_catur(8);
    /*
    # # # # # # # #
     # # # # # # #
    # # # # # # # #
     # # # # # # #
    # # # # # # # #
     # # # # # # #
    # # # # # # # #
     # # # # # # #
    echo papan_catur(5);
    /*
    # # # # #
     # # # #
    # # # # #
     # # # #
    # # # # #
    */

?>