<?php 

$hargaawal=$_POST['hargaawal'];
$diskon=$_POST['diskon'];

if($hargaawal==""){
    echo "<script>alert('Silahkan masukkan harga awal');
    window.location='index.php';
    </script>";
}elseif($diskon==""){
    echo "<script>alert('Silahkan masukkan diskon barang');
    window.location='index.php';
    </script>";
}elseif($diskon>100){
    echo "<script>alert('Diskon Terlalu Banyak');
    window.location='index.php';
    </script>";
}elseif($diskon<0){
    echo "<script>alert('Diskon apa itu');
    window.location='index.php';
    </script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h4>Harga Awal : Rp <?php echo $hargaawal ?>.00</h4>
        <h4>Jumlah diskon : <?php echo $diskon ?> %</h4>
        <h4>Potongan Harga : Rp <?php echo $hargadiskon ?>.00</h4>
        <h4>Jadi Total Harga yang harus dibayar adalah : Rp <?php echo $hargatotal ?>.00</h4>
</body>
</html>