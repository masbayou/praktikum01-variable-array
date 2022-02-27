<?php
// fungsi array pop berguna untuk menghapus nilai terakhir dalam sebuah data array
    $tims = ["erwin","heru","ali","zaki"];
    array_pop($tims);
    foreach ($tims as $person) {
        echo $person . '</br>';
    }
?>