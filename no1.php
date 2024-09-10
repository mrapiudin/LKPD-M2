<?php
$text = "Hello world!$%";

preg_match_all('/[!*$%@#^&()]/', $text, $matches);

if (!empty($matches[0])) {
    $found_symbols = implode(', ', $matches[0]);
    echo $text;
    echo '<br>';
    echo "Karakter yang terdapat pada kalimat : $found_symbols";

} else {
    echo $text;
    echo '<br>';
    echo "Tidak terdapat simbol pada kalimat";
}


echo '<br>';

$text = "Hello asep kawanku yang berusia 20 tahun";
$patern = "/Hello ([a-zA-Z]+) kawanku yang berusia ([0-9]+) tahun/";

preg_match_all($patern, $text, $nyari);

if(!empty($nyari)) { 
        $nama = $nyari[2][0];
        $usia = $nyari[1][0];
        echo  "Nama : $nama <br> Usia : $usia<br>";
} else {
    echo 'tidak ada kalimat';
}

?>