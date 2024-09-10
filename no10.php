<?php

$nama = 'putri';
$nilai_benar = ['A','D','C','C','A','E','B','A','E'];
$nilai_asli = ['A','B','C','C','C','E','A','A','E'];

echo "Nama: $nama"."<br>";
echo "Jumlah jawaban benar: ";
$correct = 0;
$incorrect = 0;

for ($i = 0; $i < count($nilai_benar); $i++) {
    if ($nilai_benar[$i] == $nilai_asli[$i]) {
        $correct++;
    } else {
        $incorrect++;
    }
}

echo $correct . "<br>";
echo "Jumlah jawaban salah: $incorrect". "<br>";