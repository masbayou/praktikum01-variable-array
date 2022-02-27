<?php
// fungsi array shift berguna untuk menghapus nilai awal dalam sebuah data array
    $tims = ["erwin","heru","ali","zaki"];
    array_shift($tims);
    foreach ($tims as $person) {
        echo $person . '</br>';
    }
?>