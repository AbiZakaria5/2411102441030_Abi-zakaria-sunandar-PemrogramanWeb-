<!DOCTYPE html>
<html>
<head>
    <title>Hitung Saldo Akhir</title>
</head>
<body>

<h2>Form Hitung Saldo Akhir Tabungan</h2>

<form method="POST">
    Saldo Awal (Rp): <br>
    <input type="number" name="saldo_awal" required><br><br>

    Lama Menabung (bulan): <br>
    <input type="number" name="bulan" required><br><br>

    <button type="submit" name="hitung">Hitung Saldo Akhir</button>
</form>

<hr>

<?php
if (isset($_POST['hitung'])) {

    $saldo = $_POST['saldo_awal'];
    $bulan = $_POST['bulan'];

    for ($i = 1; $i <= $bulan; $i++) {

        // Tentukan bunga berdasarkan saldo terakhir
        if ($saldo < 1100000) {
            $bunga_tahunan = 0.03; // 3%
        } else {
            $bunga_tahunan = 0.04; // 4%
        }

        // Bunga per bulan
        $bunga_bulanan = $bunga_tahunan / 12;

        // Hitung bunga bulan ini
        $bunga = $saldo * $bunga_bulanan;

        // Tambahkan bunga ke saldo
        $saldo += $bunga;

        // Kurangi biaya admin
        $saldo -= 9000;
    }

    echo "<h3>Saldo akhir setelah $bulan bulan adalah:</h3>";
    echo "<h2>Rp " . number_format($saldo, 2, ',', '.') . "</h2>";
}
?>

</body>
</html>
