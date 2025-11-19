<?php
echo "<h2>Pasangan nilai x, y, z yang memenuhi x + y + z = 25</h2>";
echo "<p>Dengan x, y, z adalah bilangan asli (bilangan positif)</p>";
echo "<hr>";

$jumlah = 0;

for ($x = 1; $x <= 23; $x++) {
    for ($y = 1; $y <= 24 - $x; $y++) {
        for ($z = 1; $z <= 25 - $x - $y; $z++) {
            if ($x + $y + $z == 25) {
                $jumlah++;
                echo "x = $x, y = $y, z = $z<br>";
            }
        }
    }
}

echo "<hr>";
echo "<strong>Jumlah penyelesaian: $jumlah</strong>";

echo "<br><br>";
echo "<div style='background-color: #f0f0f0; padding: 10px; border-radius: 5px;'>";
echo "<strong>Penjelasan:</strong><br>";
echo "• Nilai minimum dari x, y, dan z adalah 1 (bilangan asli)<br>";
echo "• Nilai maksimum x adalah 23 (karena y dan z minimal 1, jadi 25-1-1=23)<br>";
echo "• Nilai maksimum y adalah 24-x (karena z minimal 1)<br>";
echo "• Nilai maksimum z adalah 25-x-y<br>";
echo "• Menggunakan nested FOR loop 3 tingkat<br>";
echo "</div>";
?>