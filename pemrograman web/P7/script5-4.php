<html>
    <head>
        <title>Konversi jumlah detik ke satuan jam-menit-detik </title>
    </head>
    <body>
        <h1>Konversi jumlah detik ke satuan jam-menit-detik</h1>
        <?php
        /*
        Script ini merupakan kebalikan dari script5-3.php
        Script ini akan mengkonversi waktu yang diketahui dalam satuan detik
        ke dalam satuan jam-menit-detik.
        Diketahui waktu dalam detik adalah 15789 detik, akan dikonversi ke
        bentuk x jam, y menit dan z detik
        */
        $totalDetik = 15789; // jumlal
        // mencari waktu dalam jam
        $sisa = $totalDetik % 3600;
        $dalamJam = ($totalDetik - $sisa) / 3600;
        // sisa dari perhitungan jam digunakan untuk menghitung menitnya
        $totalDetik = $sisa;
        $sisa = $totalDetik % 60;
        $dalamMenit = ($totalDetik - $sisa) / 60;
        // sisa dalam perhitungan menit digunakan untuk menghitung detiknya
        $totalDetik = $sisa;
        $sisa = $totalDetik % 1;
        $dalamDetik = ($totalDetik - $sisa) / 1;
        echo "<p>Hasil konversinya adalah : ".$dalamJam." jam :
        ".$dalamMenit." menit : ".$dalamDetik." detik</p>";
        ?>
        
    </body>
</html>