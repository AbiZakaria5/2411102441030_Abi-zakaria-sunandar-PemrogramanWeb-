<?php
$a = 20;
$b = $a;

echo "\$a = $a, \$b = $b";
echo "<br />";
// hasil proses: $a = 20, $b = 20

$a = $a + 5;
echo "\$a = $a, \$b = $b";
echo "<br />";
// hasil proses: $a = 25, $b = 20

$b = $b + 10;
echo "\$a = $a, \$b = $b";
// hasil proses: $a = 25, $b = 30
?>