<!DOCTYPE html>
<html>
<head>
    <title>Hitung Upah Karyawan Berdasarkan Golongan</title>
</head>
<body>
    <h2>Hitung Upah Karyawan Honorer Berdasarkan Golongan</h2>

    <form method="post" action="">
        <label>Masukkan jumlah jam kerja selama satu minggu:</label><br>
        <input type="number" name="jam_kerja" required><br><br>

        <label>Pilih Golongan Karyawan:</label><br>
        <select name="golongan" required>
            <option value="">-- Pilih Golongan --</option>
            <option value="A">A (Rp 4.000/jam)</option>
            <option value="B">B (Rp 5.000/jam)</option>
            <option value="C">C (Rp 6.000/jam)</option>
            <option value="D">D (Rp 7.500/jam)</option>
        </select><br><br>

        <input type="submit" name="submit" value="Hitung Upah">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $jam_kerja = $_POST['jam_kerja'];
        $golongan = $_POST['golongan'];
        $batas_jam = 48;
        $upah_lembur = 3000;

        // Tentukan upah per jam berdasarkan golongan
        switch ($golongan) {
            case 'A':
                $upah_perjam = 4000;
                break;
            case 'B':
                $upah_perjam = 5000;
                break;
            case 'C':
                $upah_perjam = 6000;
                break;
            case 'D':
                $upah_perjam = 7500;
                break;
            default:
                $upah_perjam = 0;
        }

        // Hitung total upah
        if ($jam_kerja <= $batas_jam) {
            $total_upah = $jam_kerja * $upah_perjam;
        } else {
            $lembur = $jam_kerja - $batas_jam;
            $total_upah = ($batas_jam * $upah_perjam) + ($lembur * $upah_lembur);
        }

        echo "<h3>Golongan: $golongan</h3>";
        echo "<h3>Total upah yang diterima: Rp " . number_format($total_upah, 0, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>
