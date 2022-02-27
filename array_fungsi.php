<?php
 $ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu"];
 echo '<ol>';
 foreach ($ar_buah as $k => $v) {
     echo '<li>'.$k. '-' . $v . '</li>';
 }
 echo '</ol>';
//  fungsi array sort adalah mengurutkan data array dalam urutan menaik
 sort($ar_buah);
 echo '<hr>';
 echo '<ol>';
 foreach ($ar_buah as $buah => $v) {
     echo '<li>'. $buah . '-' . $v .'</li>';
 }
 echo '</ol>';
// fungsi array arsort adalah mengurutkan data array dalam urutan menurun
 arsort($ar_buah);
 echo '<hr>';
 echo '<ol>';
 foreach ($ar_buah as $buah => $v) {
     echo '<li>'. $buah . '-' . $v .'</li>';
 }
 echo '</ol>';
 echo '<hr>';
?>