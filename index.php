<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aldo Fakhry_11 RPL 3</title>
</head>

<body>

</body>

</html>

<?php

include 'Manusia.php';
include 'HewanPeliharaan.php';

$aldo = new Manusia();
$neko = new HewanPeliharaan();

$aldo->nama             = 'Aldo Fakhry';
$aldo->jenis_kelamin    = 'Laki-laki';
$aldo->tanggal_lahir    = '30/05/2004';
$aldo->makanan = 'Capcay';

$neko->nama             = 'Ogayu';
$neko->jenis            = 'Kucing';

// echo $aldo->bersuara();
// echo " ";
// echo $aldo->usia();
// echo " ";
// echo $aldo->jenis();
// echo "\n";
echo $neko->bersuara(); ?>