<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // ini adalah komentar 
        # ini adalah komentar
        
        /* ini adalah komentar yang dapat
            ditulis lebih dari 1 baris */

        $x = 5 + 15 + 5;
        echo $x;

        $x = 5 + /* 15 */ + 5;
        echo $x;

        $namadepan = "Itsuka";
        $namabelakang = "Shido";

        $namalengkap = $namadepan." ".
        $namabelakang;

        echo "<br>Nama saya adalah ".
        $namalengkap;

        $tglMasuk = 2018;
        $tglmasuk = 2005;
        echo "<br> Tanggal masuk kuliah $tglmasuk";
        echo "<br> Tanggal masuk kuliah ".
        $tglMasuk;

    ?>
</body>
</html>