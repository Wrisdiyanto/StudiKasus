<h2>Aplikasi Sederhana Menghitung Jumlah Kata Yang Sama</h2>
<?php

$string = "Hello World";
$hasil = str_replace(" ", "", $string);
foreach (count_chars($hasil, 1) as $i => $val)
{
   echo " \"" , chr($i) , "\" : $val <br>";
}

// $teks = "Hello World";
// $kata   = explode(" ", $teks);
// $hasil  = count($kata);
// $data   = array_count_values($kata);
// echo "<b>Teks</b> <br> $teks";
// echo "<hr>";
// echo "Jumlah Kata: $hasil buah kata";
// echo "<hr>";

// foreach($data as $x => $x_value) {
//     echo $x." : ".$x_value;
//     echo "<br>";
// }
// echo "<hr>";
?>