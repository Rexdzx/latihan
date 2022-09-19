<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganjil Genap</title>

</head>

<body>
    <form method="post" action="">
        <div class="row">
            <div class="col" style="margin-left:20px ; margin-top:20px;">
                <label for="number">Masukkan Angka</label><br>
                <input type="number" name="angka" required="required"><br><br>
                <input type="submit" name="keterangan" value="Keterangan">
            </div>
        </div>

        <?php

    $angka  = $_POST['angka'];
    $keterangan  = '';

    if($angka % 2 == 0){
        echo "$angka Merupakan Bilangan Genap";
    }else{
        echo "$angka Merupakan Bilangan Ganjil";
    }

    ?>
    </form>
</body>

</html>