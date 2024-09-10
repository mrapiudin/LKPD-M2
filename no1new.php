<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label >MASUKAN TEXT</label>
        <input type="text" name="text">
        <button type="submit">KIRIM</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST['text']; // Get the value of the text input field
        preg_match_all('/[!*$%@#^&()]/', $text, $matches);

        if (!empty($matches[0])) {
            $found_symbols = implode(', ', $matches[0]);
            echo ''.$text;
            echo '<br>';
            echo "Karakter yang terdapat pada kalimat : $found_symbols";

        } else {
            echo ''.$text;
            echo '<br>';
            echo "Tidak terdapat simbol pada kalimat";
        }
    }
    ?>
</body>
</html>