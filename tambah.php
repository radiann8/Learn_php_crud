<?php 
    include "service/database.php";
    $data_input = "";
    
if(isset($_POST["inventori"])){
    $title = $_POST["title"];
    $deskripsi = $_POST["deskripsi"];
    $stok = $_POST["stok"];

    $sql = "INSERT INTO barang (title, deskripsi, stok) VALUES
    ('$title', '$deskripsi', '$stok')";

    if($db->query($sql)) {
        echo "DATA MASUK";
    }else {
        echo "DATA TIDAK MASUK";
    }
//if (empty($data_input)) {
//    echo "DATA KOSONG";
//} else {
//    echo "DATA MASUK" . $data_input;
//}
}
$db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAHKAN</title>
</head>
<body>
    <?php include "layout/header.html" ?>
    <form action="tambah.php" method="POST">
        <input type="text" placehorder="title" name="title" />
        <input type="text" placehorder="deskripsi" name="deskripsi" />
        <input type="text" placehorder="stok" name="stok" />
        <br><button type="submit" name="inventori">Tambahkan</button></br>
        <br><button type="submit"><a href ="index.php">Beranda</a></button></br>
    </form>
</body>
</html>