<?php
    // definisikan konstanta
    define('PHI', 3.14);
    define('DBNAME', 'inventori');
    define('DBSERVER', 'localhost');

    $jari = 8;
    $luas = PHI * $jari * $jari;
    $kll = 2 * PHI * $jari;

    echo 'Luas Lingkaran dengan jari' .$jari.' : ' .$luas;
    echo '<br/>Kelilinya : ' .$kll;
?>
<hr>

<?php
    echo 'Nama Database nya :' .DBNAME;
    echo '<br/>Lokasi database nya ada di' .DBSERVER;
?>