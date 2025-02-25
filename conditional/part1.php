<?php

for ($nilai = 0;$nilai <= 103; $nilai++) {
    if ($nilai > 100 || $nilai < 0 ){
        echo "$nilai : Nilai wajib di antara 0 - 100";
    } else {
        if ($nilai >= 90) {
            echo "$nilai : A <br>";
        } elseif ($nilai >= 80 ) {
            echo "$nilai: B <br>";
        } elseif ($nilai >= 70){
            echo "$nilai: C <br>";
        }
        elseif ($nilai >= 0){
            echo "$nilai : D <br>" ;
        }
        else {
            echo "Nilai Wajib di antara 0 - 100 <br>";
        }
    }
}