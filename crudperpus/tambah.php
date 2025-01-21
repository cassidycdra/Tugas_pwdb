<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Tambah Data Buku</h2>
    <form action="tambah-proses.php" method="POST">
        <label>Nama Buku</label><br>
        <input type="text" name="nama_buku"><br>
        <label>Penulis</label><br>
        <input type="text" name="penulis"><br>
        <label>Penerbit</label><br>
        <input type="text" name="penerbit"><br>
        <label>Jumlah</label><br>
        <input type="text" name="jumlah"><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
