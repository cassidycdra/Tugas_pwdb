<?php
include 'koneksi.php';
$id_buku = $_GET['id'];
$sql = "SELECT * FROM tb_buku WHERE id_buku='$id_buku'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Edit Data Buku</h2>
    <form action="edit-proses.php" method="POST">
        <input type="hidden" name="id_buku" value="<?php echo $row['id_buku']; ?>">
        <label>Nama Buku</label><br>
        <input type="text" name="nama_buku" value="<?php echo $row['nama_buku']; ?>"><br>
        <label>Penulis</label><br>
        <input type="text" name="penulis" value="<?php echo $row['penulis']; ?>"><br>
        <label>Penerbit</label><br>
        <input type="text" name="penerbit" value="<?php echo $row['penerbit']; ?>"><br>
        <label>Jumlah</label><br>
        <input type="text" name="jumlah" value="<?php echo $row['jumlah']; ?>"><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
