<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persen</title>
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
</head>

<body>
    <form action="" method="post">
        <label for="persen">
            <p>masukkan angka persen</p>
            <input type="number" name="persen" required="required" maxlength="2" size="1"> %
            <p>dari</p>
        </label>
        <label for="angka">
            <input type="number" name="angka" required="required" value="<?php echo $angka ?>"><br><br>
        </label>
        <input type="submit" name="hitung" value="Hitung">

        <?php
    $angka  =  $_POST['angka'];
    $persen =  $_POST['persen'];
    $hasil  = $persen /100 *$angka;
    echo $hasil;

    ?>

    </form>
</body>

</html>