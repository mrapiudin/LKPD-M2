<?php 
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 88];

$hasil = array_unique(array_merge($bil1, $bil2));

echo 'Hasil : ';
rsort($hasil);
echo  implode(', ', $hasil);