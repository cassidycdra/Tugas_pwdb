<?php
include 'koneksi.php';

$nama_buku = $_POST['nama_buku'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$jumlah = $_POST['jumlah'];

$sql = "INSERT INTO tb_buku (nama_buku, penulis, penerbit, jumlah) VALUES ('$nama_buku', '$penulis', '$penerbit', '$jumlah')";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
