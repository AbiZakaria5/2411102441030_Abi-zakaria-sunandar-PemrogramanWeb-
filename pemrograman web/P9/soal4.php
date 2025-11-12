<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Jumlah Hari dalam Bulan Ini</title>
</head>
<body>
    <h2>Jumlah Hari dalam Bulan Sekarang</h2>

    <?php
    // Ambil bulan saat ini (1–12)
    $bulan = date("n");
    $tahun = date("Y"); // untuk cek tahun kabisat
    $nama_bulan = date("F"); // nama bulan (misalnya: January)

    switch ($bulan) {
        case 1:  // Januari
        case 3:  // Maret
        case 5:  // Mei
        case 7:  // Juli
        case 8:  // Agustus
        case 10: // Oktober
        case 12: // Desember
            $jumlah_hari = 31;
            break;
        case 4:  // April
        case 6:  // Juni
        case 9:  // September
        case 11: // November
            $jumlah_hari = 30;
            break;
        case 2:  // Februari
            // Cek tahun kabisat
            if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
                $jumlah_hari = 29;
            } else {
                $jumlah_hari = 28;
            }
            break;
        default:
            $jumlah_hari = 0; // Jika terjadi error
    }

    echo "<p>Bulan saat ini: <strong>$nama_bulan</strong></p>";
    echo "<p>Jumlah hari: <strong>$jumlah_hari hari</strong></p>";
    ?>
</body>
</html>
