<?php 
    include "service/database.php";

//Query untuk mengambil data
$sql = "SELECT * FROM barang";
$result = $db->query($sql);

$db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
    table {
        width:50%;
    }

    tr, th, td {
        border: 1px solid #dddddd;
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 1</title>
</head>
<body>
    <?php include "layout/header.html" ?>
    <div>
        <table>
            <thead>
            <tr>
                <th>Title</th>
                <th>Deskripsi</th>
                <th>Stok</th>
            </tr>
            <theader>
            <tbody>
            <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $row['deskripsi'] ?></td>
                <td><?php echo $row['stok'] ?></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <br>
    <button type="submit"><a href ="tambah.php">Tambahkan</a></button>
    </br>
    <?php include "layout/footer.html" ?>
</body>
</html>