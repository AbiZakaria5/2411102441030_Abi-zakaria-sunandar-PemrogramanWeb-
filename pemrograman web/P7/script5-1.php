<html>
<head>
    <title>Menghitung Komisi Salesman</title>
</head>
<body>
    <h1>Menghitung Komisi Salesman</h1>
    <?php
    /*
    Script ini akan menghitung komisi salesman berdasarkan nilai penjualan
    yang dicapai yaitu sebesar Rp. 1.500.000,-
    Ketentuan komisnya adalah 5% dari nilai penjualan yang dicapai.
    */
    $nilaiJual = 1500000; // nilai penjualan yang didapat salesman
    $komisi = 0.05 * $nilaiJual; // menghitung komisi yaitu 5% dari nilai penjualan
    echo "<p>Nilai penjualan salesman : Rp. ".$nilaiJual.".</p>"; // menampilkan nilai penjualan salesman
    echo "<p>Komisi yang didapat salesman adalah Rp. ".$komisi.".</p>";
    // menampilkan hasil perhitungan komisi
    ?>
</body>
</html>
