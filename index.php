<?php 
include 'function.php';


for($i = 1; $i <= 100; $i++) {

    if($i % 5 == 0 && $i % 3 == 0){
        echo "Luas Pesegi Panjang : " . luasPersegiPanjang( ($i/3) ,($i/5) );
        echo "<br>";
    } else if ($i % 5 == 0) {
        echo "Keliling Lingkaran : " . kelililingLingkaran( ($i/5) );
        echo "<br>";
    } else if ($i % 3 == 0 ) {
        echo "Luas lingkaran : " . luasLingkaran( ($i/3) );
    }else {
        echo "i = " . number_format((float)$i,2, '.', '');;
    }
    echo "<br>";
}

?>