<?php
// fungsi array unshift berguna untuk menambahkan satu atau lebih nilai awal dalam sebuah data array
    $tims = ["erwin","heru","ali","zaki"];
    array_unshift($tims, "joko", "wati");
    foreach ($tims as $person) {
        echo $person . '</br>';
    }
?>