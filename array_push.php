<?php
// fungsi array push berguna untuk menambahkan  data array
    $tims = ["erwin","heru","ali","zaki"];
    array_push($tims, "wati");
    foreach ($tims as $person) {
        echo $person. '</br>';
    }
?>
