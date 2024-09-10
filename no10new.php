<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <div class="container">
        <form method="post"> <!-- added method="post" attribute -->
            <label>Nama:</label>
            <input type="text" name="nama"><br><br>
            
            <label>Soal 1:</label>
            <input type="radio" name="soal1" value="A"> A
            <input type="radio" name="soal1" value="B"> B
            <input type="radio" name="soal1" value="C"> C
            <input type="radio" name="soal1" value="D"> D
            <input type="radio" name="soal1" value="E"> E<br><br>
            
            <label>Soal 2:</label>
            <input type="radio" name="soal2" value="A"> A
            <input type="radio" name="soal2" value="B"> B
            <input type="radio" name="soal2" value="C"> C
            <input type="radio" name="soal2" value="D"> D
            <input type="radio" name="soal2" value="E"> E<br><br>
            
            <label>Soal 3:</label>
            <input type="radio" name="soal3" value="A"> A
            <input type="radio" name="soal3" value="B"> B
            <input type="radio" name="soal3" value="C"> C
            <input type="radio" name="soal3" value="D"> D
            <input type="radio" name="soal3" value="E"> E<br><br>
            
            <label>Soal 4:</label>
            <input type="radio" name="soal4" value="A"> A
            <input type="radio" name="soal4" value="B"> B
            <input type="radio" name="soal4" value="C"> C
            <input type="radio" name="soal4" value="D"> D
            <input type="radio" name="soal4" value="E"> E<br><br>
            
            <label>Soal 5:</label>
            <input type="radio" name="soal5" value="A"> A
            <input type="radio" name="soal5" value="B"> B
            <input type="radio" name="soal5" value="C"> C
            <input type="radio" name="soal5" value="D"> D
            <input type="radio" name="soal5" value="E"> E<br><br>
            
            <label>Soal 6:</label>
            <input type="radio" name="soal6" value="A"> A
            <input type="radio" name="soal6" value="B"> B
            <input type="radio" name="soal6" value="C"> C
            <input type="radio" name="soal6" value="D"> D
            <input type="radio" name="soal6" value="E"> E<br><br>
            
            <label>Soal 7:</label>
            <input type="radio" name="soal7" value="A"> A
            <input type="radio" name="soal7" value="B"> B
            <input type="radio" name="soal7" value="C"> C
            <input type="radio" name="soal7" value="D"> D
            <input type="radio" name="soal7" value="E"> E<br><br>
            
            <label>Soal 8:</label>
            <input type="radio" name="soal8" value="A"> A
            <input type="radio" name="soal8" value="B"> B
            <input type="radio" name="soal8" value="C"> C
            <input type="radio" name="soal8" value="D"> D
            <input type="radio" name="soal8" value="E"> E<br><br>
            
            <label>Soal 9:</label>
            <input type="radio" name="soal9" value="A"> A
            <input type="radio" name="soal9" value="B"> B
            <input type="radio" name="soal9" value="C"> C
            <input type="radio" name="soal9" value="D"> D
            <input type="radio" name="soal9" value="E"> E<br><br>
            
            <button type="submit">KIRIM</button> <!-- added type="submit" attribute -->
        </form>
    </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nilai_benar = ['A','D','C','C','A','E','B','A','E'];
  $nilai_asli = [
    isset($_POST['soal1']) ? $_POST['soal1'] : '',
    isset($_POST['soal2']) ? $_POST['soal2'] : '',
    isset($_POST['soal3']) ? $_POST['soal3'] : '',
    isset($_POST['soal4']) ? $_POST['soal4'] : '',
    isset($_POST['soal5']) ? $_POST['soal5'] : '',
    isset($_POST['soal6']) ? $_POST['soal6'] : '',
    isset($_POST['soal7']) ? $_POST['soal7'] : '',
    isset($_POST['soal8']) ? $_POST['soal8'] : '',
    isset($_POST['soal9']) ? $_POST['soal9'] : ''
  ];

  $correct = 0;
  $incorrect = 0;

  for ($i = 0; $i < count($nilai_benar); $i++) {
    if ($nilai_benar[$i] == $nilai_asli[$i]) {
      $correct++;
    } else {
      $incorrect++;
    }
  }

  echo "Nama: ".$_POST['nama']."<br>";
  echo "Jumlah jawaban benar: ".$correct."<br>";
  echo "Jumlah jawaban salah: ".$incorrect."<br>";
}
?>

</center>