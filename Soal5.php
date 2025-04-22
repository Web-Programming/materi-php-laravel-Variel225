<?php
// Soal No 5
for($k = 1; $k <= 5; $k++) {
    echo "<br/>";
    echo "Perkalian $k:<br>";
    for($l = 1; $l <= 10; $l++) {
        $hasilkali = $k * $l;
        echo "$k x $l = $hasilkali<br>";
    }
}
?>