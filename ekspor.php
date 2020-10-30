<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Barang</title>
</head>
<body>
        <?php
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Data Barang.xls");
        ?>

        <h1>Data Barang</h1>
    
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "koneksi.php";
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM barang");
                    while($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d["nama_barang"]; ?></td>
                    <td><?php echo $d["jenis_barang"]; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

</body>
</html>