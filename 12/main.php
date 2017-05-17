<?php

$d = $_GET['dx'];
$n= $_GET['ny'];

echo "При d=$d та n=$n<br>"; 
$f = sin($n+8*$d)+(5-log($n+$d)/($d-$n) );
$h = exp(2*$n)+sqrt(16*$d*$d*(3+$n));
 echo "Результат f становить $f<br>Результат h становить $h";
?> 