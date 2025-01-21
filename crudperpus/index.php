<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Data Buku</h2>
    <table>
        <tr>
            <th>ID Buku</th>
            <th>Nama Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        <?php
        $sql = "SELECT * FROM tb_buku";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["id_buku"]."</td>";
                echo "<td>".$row["nama_buku"]."</td>";
                echo "<td>".$row["penulis"]."</td>";
                echo "<td>".$row["penerbit"]."</td>";
                echo "<td>".$row["jumlah"]."</td>";
                echo "<td><a href='edit.php?id=".$row["id_buku"]."'>Edit</a> | <a href='hapus.php?id=".$row["id_buku"]."'>Hapus</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
        }
        ?>
    </table>
    <a href="tambah.php">Tambah Data</a>
</body>
</html>
