<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label >Harga Awal</label>
        <input type="number" name="hargaAwal">
        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hargaAwal =(float) $_POST['hargaAwal'];
        $nama_hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
        $hari_ini = date('w'); //mengembalikan angka dalam seminggu (fungsi bawaan php)
        echo "Hari ini adalah " . $nama_hari[$hari_ini];
        echo "<br>";

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
    }
    ?>
</body>
</html>