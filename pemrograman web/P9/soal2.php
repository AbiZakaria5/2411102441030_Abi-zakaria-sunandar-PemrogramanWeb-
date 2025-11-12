<!DOCTYPE html>
<html>
<head>
    <title>Hitung Upah Karyawan</title>
</head>
<body>
    <h2>Hitung Upah Karyawan Honorer</h2>

    <form method="post" action="">
        <label>Masukkan jumlah jam kerja selama satu minggu:</label><br>
        <input type="number" name="jam_kerja" required>
        <br><br>
        <input type="submit" name="submit" value="Hitung Upah">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $jam_kerja = $_POST['jam_kerja'];
        $upah_normal = 2000;
        $upah_lembur = 3000;
        $batas_jam = 48;

        if ($jam_kerja <= $batas_jam) {
            $total_upah = $jam_kerja * $upah_normal;
        } else {
            $lembur = $jam_kerja - $batas_jam;
            $total_upah = ($batas_jam * $upah_normal) + ($lembur * $upah_lembur);
        }

        echo "<h3>Total upah yang diterima: Rp " . number_format($total_upah, 0, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>
