<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Barang</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/fontawesome/all.css">

    <script src="js/fontawesome/js/all.js"></script>
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
        <div class="header">
            <div class="back">
                <a href="../crud/"><i class="fa fa-arrow-left"></i></a>
            </div>
            <div class="title">
                <span>Edit Data Barang</span>
            </div>
        </div>
        
        <form action="edit.php" method="post">
            <div class="form">
                <div class="name-field">
                <?php
                    include "koneksi.php";
                    $id = $_GET["id"];
                    $data = mysqli_query($koneksi, "SELECT * FROM barang WHERE id='$id'");
                    while($d = mysqli_fetch_array($data)) {
                ?>
                    <div class="size" hidden>
                        <input type="text" name="id" value="<?php echo $d['id']; ?>">
                    </div>
                    <div class="size">
                        <span>Nama Barang</span>
                        <input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>" placeholder="Masukkan nama barang...">
                    </div>
                    <div class="size">
                        <span>Jenis Barang</span>
                        <input type="text" name="jenis_barang" value="<?php echo $d['jenis_barang']; ?>" placeholder="Masukkan jenis barang...">
                    </div>
                <?php } ?>
                </div>
            </div>
            <button type="submit" class="btn-submit">Edit</button>
        </form>
    </div>

</body>
</html>