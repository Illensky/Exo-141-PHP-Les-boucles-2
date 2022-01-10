<?php
//exo 1
$exo1 = 0;

while ($exo1 < 10) {
    echo $exo1."<br>";
    $exo1++;
}

echo "<br><br>";

$exo2 = 2;

while ($exo2 < 20) {
    echo $exo2;
    $exo2 = $exo1 * $exo2;
}

echo "<br><br>";

$exo31 = 100;
$exo32 = 23;
while ($exo31 > 10) {
    echo $exo31."<br>";
    $exo31 = $exo31 - $exo32;
}

echo "<br><br>";

$exo4 = 1;

while ($exo4 < 10) {
    echo $exo4."<br>";
    $exo4 += $exo4 /2;
}

echo "<br><br>";

for ($i = 0; $i<=15; $i++) {
    echo $i." On y arrive presque. <br>";
}

echo "<br><br>";

for ($i = 20; $i >= 0 ; $i--) {
    echo $i." C'est presque bon. <br>";
}

echo "<br><br>";

for ($i = 1; $i <= 100 ; $i+=15) {
    echo $i." On tient le bon bout. <br>";
}

echo "<br><br>";

for ($i = 200; $i >= 0 ; $i-=15) {
    echo $i." Enfin !!! <br>";
}