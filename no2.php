<?php
$nama_hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
$hari_ini = date('w'); //mengembalikan angka dalam seminggu (fungsi bawaan php)
echo "Hari ini adalah " . $nama_hari[$hari_ini];
echo "<br>";

$hargaAwal = 110000;
$hargaDiskon = 0;

if ($hargaAwal > 100000 && $hari_ini  == 2){ 
    $hargaDiskon = $hargaAwal * 0.12;
} elseif ($hari_ini  == 2) {
    $hargaDiskon = $hargaAwal * 0.05;
} elseif ($hargaAwal > 100000) {
    $hargaDiskon = $hargaAwal * 0.07;
} else {
    echo "tidak ada diskon";
}

$hargaAkhir = $hargaAwal - $hargaDiskon;

echo "Total pembelian : "."<b>"."Rp. ". ($hargaAwal). "</b>";
echo "<br>";
echo "total yang harus di bayar : "."<b>"."Rp. ". ($hargaAkhir);
?>