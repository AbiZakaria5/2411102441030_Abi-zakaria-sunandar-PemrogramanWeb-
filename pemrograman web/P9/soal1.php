<!DOCTYPE html>
<html>
<head>
    <title>Soal 1 - Cek Tahun Kabisat</title>
</head>
<body>
    <h2>Cek Tahun Kabisat</h2>
    <form method="post">
        <label for="tahun">Masukkan Tahun:</label>
        <input type="number" id="tahun" name="tahun" required>
        <input type="submit" value="Cek">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tahun = $_POST['tahun'];
        $kabisat = false;

        if ($tahun % 4 == 0) {
            if ($tahun % 100 == 0) {
                if ($tahun % 400 == 0) {
                    $kabisat = true;
                }
            } else {
                $kabisat = true;
            }
        }

        if ($kabisat) {
            echo "<p>Tahun $tahun adalah tahun kabisat.</p>";
        } else {
            echo "<p>Tahun $tahun bukan tahun kabisat.</p>";
        }
    }
    ?>
</body>
</html>