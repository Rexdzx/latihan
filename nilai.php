<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
    <style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }
    </style>

    <?php

$nama   = $_POST['nama'];
$nilai  = $_POST['nilai'];

    switch($nilai){
        case $nilai >= 90:
          $pesan ="$nama anak baik budi rajin menabung";
          break;
        case $nilai >=80:
            $pesan = "$nama anak baik budi";
            break;
        case $nilai >=70:
            $pesan = "$nama anak baik";
            break;
        case $nilai >=60:
            $pesan = "$nama anak kurang baik";
            break;
        case $nilai >=50:
            $pesan= "$nama anak bandal";
            break;
        default:
            $pesan = "$nama kekurangan gizi";
        }

?>

</head>

<body>

    <form action="" method="post">
        <label for="nama">
            <p>Nama:</p>
            <input type="text" name="nama" placeholder="Masukkan Nama" required="required" autocomplete="off">
        </label>
        <label for="nilai">
            <p>Nilai:</p>
            <input type="number" name="nilai" placeholder="Masukkan Nilai" required="required">
        </label><br><br>
        <input readonly="readonly" name="pesan" placeholder="Pesan" value="<?php echo $pesan ?>" size="25"
            style="font-size:14px;"><br>
        <input type="submit" name="hasil" value="Hasil" style="margin-top:12px ;">
    </form>

</body>

</html>