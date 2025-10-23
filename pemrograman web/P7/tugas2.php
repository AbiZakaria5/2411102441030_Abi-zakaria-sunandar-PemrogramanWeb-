<?php
$jumlahUang = 1575250;

$a = intdiv($jumlahUang, 100000);
$sisa = $jumlahUang % 100000;

$b = intdiv($sisa, 50000);
$sisa = $sisa % 50000;

$c = intdiv($sisa, 20000);
$sisa = $sisa % 20000;

$d = intdiv($sisa, 5000);
$sisa = $sisa % 5000;

$e = intdiv($sisa, 100);
$sisa = $sisa % 100;

$f = intdiv($sisa, 50);
$sisa = $sisa % 50;

echo "Jumlah Rp. 100.000 : ".$a."<br/>";
echo "Jumlah Rp. 50.000 : ".$b."<br/>";
echo "Jumlah Rp. 20.000 : ".$c."<br/>";
echo "Jumlah Rp. 5.000 : ".$d."<br/>";
echo "Jumlah Rp. 100 : ".$e."<br/>";
echo "Jumlah Rp. 50 : ".$f."<br/>";
?>
