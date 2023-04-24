<?php

if(isset($_POST['submit'])){

    $angka = $_POST['angka'];

    function bilangan_prima($angka){

        if($angka <= 1)
        return 0;
        for($i = 2; $i <= $angka / 2; $i++){
            if($angka % $i == 0)
            return 0;
        }
        return 1;
    }
    $prima = bilangan_prima($angka);
    if($prima == 1){
        echo "$angka adalah bilangan prima";
    }else{
        echo "$angka bukan bilangan prima";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Bilangan Prima</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
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
        <label for="angka">
            <input type="number" name="angka" placeholder="Masukkan angka" required="required">
        </label>
        <input type="submit" name="submit" value="Hasil">
    </form>
</body>

</html>
