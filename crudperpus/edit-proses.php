<?php
include 'koneksi.php';

$id_buku = $_POST['id_buku'];
$nama_buku = $_POST['nama_buku'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$jumlah = $_POST['jumlah'];

$sql = "UPDATE tb_buku SET nama_buku='$nama_buku', penulis='$penulis', penerbit='$penerbit', jumlah='$jumlah' WHERE id_buku='$id_buku'";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
