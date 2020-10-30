<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang</title>
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
                <span>Tambah Data Barang</span>
            </div>
        </div>
        
        <form action="tambah.php" method="post">
            <div class="form">
                <div class="name-field">
                    <div class="size">
                        <span>Nama Barang</span>
                        <input type="text" name="nama_barang" placeholder="Masukkan nama barang...">
                    </div>
                    <div class="size">
                        <span>Jenis Barang</span>
                        <input type="text" name="jenis_barang" placeholder="Masukkan jenis barang...">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn-submit">Tambah</button>
        </form>
    </div>

</body>
</html>