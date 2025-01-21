<?php
include 'koneksi.php';
$id_buku = $_GET['id'];

// Ambil data buku yang akan dihapus
$sql_select = "SELECT * FROM tb_buku WHERE id_buku='$id_buku'";
$result_select = $conn->query($sql_select);
$row = $result_select->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Jika konfirmasi dijawab dengan ya
    if ($_POST['confirm'] == 'Yes') {
        $sql_delete = "DELETE FROM tb_buku WHERE id_buku='$id_buku'";
        if ($conn->query($sql_delete) === TRUE) {
            header('Location: index.php');
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        // Jika konfirmasi dijawab dengan tidak
        header('Location: index.php');
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Hapus Data Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Konfirmasi Hapus Data Buku</h2>
    <p>Anda akan menghapus data buku dengan detail berikut:</p>
    <p><strong>ID Buku:</strong> <?php echo $row['id_buku']; ?></p>
    <p><strong>Nama Buku:</strong> <?php echo $row['nama_buku']; ?></p>
    <p><strong>Penulis:</strong> <?php echo $row['penulis']; ?></p>
    <p><strong>Penerbit:</strong> <?php echo $row['penerbit']; ?></p>
    <p><strong>Jumlah:</strong> <?php echo $row['jumlah']; ?></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]).'?id='.$id_buku; ?>">
        <p>Apakah Anda yakin ingin menghapus data ini?</p>
        <input type="submit" name="confirm" value="Yes">
        <input type="submit" name="confirm" value="No">
    </form>
</body>
</html>