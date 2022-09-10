<?php 

    function luasLingkaran (float $n) {
        $pi = 3.14;
        $result = $pi * $n * $n;

        return number_format((float)$result,2, '.', ''); 
    }

    function kelililingLingkaran (float $n) {
        $pi = 3.14;
        $result = 2 * $pi * $n;
        return number_format((float)$result,2, '.', '');
    }

    function luasPersegiPanjang (float $p, float $l) {
        $result = $p * $l;
        return number_format((float)$result,2, '.', '');
    }
?>