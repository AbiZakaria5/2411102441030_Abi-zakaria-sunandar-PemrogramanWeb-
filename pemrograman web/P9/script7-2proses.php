<html>
<head>
    <title>Mencari Status Bilangan</title>
</head>
<body>
<h1>Mencari Status Bilangan</h1>

<?php

// Cek apakah data POST tersedia
if (isset($_POST['bil'])) {
    $bilangan = $_POST['bil'];

    // cara ke - 1

    if ($bilangan > 0)
        echo "<p>Bilangan ".$bilangan." adalah positif</p>";
    else
        if ($bilangan < 0)
            echo "<p>Bilangan ".$bilangan." adalah negatif</p>";
        else
            echo "<p>Bilangan ".$bilangan." adalah nol</p>";

    // cara ke - 2

    if ($bilangan > 0)
        $status = "positif";
    else
        if ($bilangan < 0)
            $status = "negatif";
        else
            $status = "nol";

    echo "<p>Bilangan ".$bilangan." adalah bilangan ".$status."</p>";
} else {
    echo "<p>Silakan masukkan bilangan melalui form terlebih dahulu.</p>";
}

?>

</body>
</html>