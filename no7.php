<?php 

$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias omnis, eius totam quia, quisquam, ad debitis voluptatum aspernatur unde vero repudiandae sed deserunt est quidem earum corporis inventore cum molestiae!";
$jumlah = 50;

function menghitungKarakter($text, $jumlah) {
    if (strlen($text) > $jumlah) {
        return "<b>"."kalimat awal :"."</b> ". substr($text, 0, $jumlah) . '.....';
    } else {
        return $text;
    }
}


echo menghitungKarakter($text, $jumlah);