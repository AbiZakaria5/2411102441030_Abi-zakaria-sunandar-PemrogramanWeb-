<?php
$saldoAwal = 1000000;
$bunga = 0.0025;
$bulan = 11;
$saldoAkhir = $saldoAwal * pow((1 + $bunga), $bulan);
echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. ".number_format($saldoAkhir, 2, ',', '.');
?>
