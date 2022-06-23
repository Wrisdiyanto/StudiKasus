<?php
$urut = array(12,9,30,'A','M',99,82,'J','N','B');
sort($urut);

$array_urut = count($urut);
for($x = 0; $x < $array_urut; $x++) {
  echo $urut[''.$x.''];
}
?>
