<?php
$database = [
    [
        "nama" => "pasta gigi",
        "hargabarang" => "18000",
        "jumlahbeli" => 1,
    ],
    [
        "nama" => "Sabun mandi",
        "hargabarang" => "5000",
        "jumlahbeli" => 3,
    ],
    [
        "nama" => "Masker",
        "hargabarang" => "15000",
        "jumlahbeli" => 4,
    ]
];


echo $database[1]['nama'];
// echo '<br>';
// echo $database[1]['hargabarang'];
// echo '<br>';
// echo $database[1]['jumlahbeli'];


echo "Daftar belanjaan:<br>";
foreach ($database as $item) {
    echo $item["nama"] . "<br>";
}

function calculateTotalHarga($database) {
    $totalHarga = 0;
    foreach ($database as $item) {
        $totalHarga += $item["hargabarang"] * $item["jumlahbeli"];
    }
    return $totalHarga;
}

$totalHarga = calculateTotalHarga($database);
echo "<br>Total harga yang harus dibayar: Rp " . number_format($totalHarga, 0, ",", ".") . "<br>";