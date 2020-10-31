<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">

    <script src="js/jquery.min.js"></script>
</head>
<body>

    <div class="navbar">
        <div class="logo">
            <span><strong>CRUD</strong>PHP</span>
        </div>
        <div class="menu">
            <ul>
                <li>
                    <a href="#">novandi18</a>
                    <ul>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="content">
        <div class="header-index">
            <h1>Data Barang</h1>
            <a href="tambah_data.php" class="btn-tambah">Tambah Data</a>
            <a href="ekspor.php" class="btn-ekspor">Ekspor Data</a>
        </div>

        <input class="searchform" type="text" id="search" placeholder="Cari barang">
    
        <table class="fl-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody id="tampil">
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
                    <td>
                        <a href="edit_data.php?id=<?php echo $d['id']; ?>" class="btn-edit">EDIT</a>
                        <a href="delete.php?id=<?php echo $d['id']; ?>" class="btn-delete">HAPUS</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $("#search").keyup(function() {
                $.ajax({
                    type: 'POST',
                    url: 'search.php',
                    data: {
                        search: $(this).val()
                    },
                    cache: false,
                    success: function(data) {
                        $("#tampil").html(data);
                    }
                });
            });
        });
    </script>

</body>
</html>