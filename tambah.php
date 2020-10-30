<?php

include "koneksi.php";

$nama_barang = $_POST["nama_barang"];
$jenis_barang = $_POST["jenis_barang"];

mysqli_query($koneksi, "INSERT INTO barang VALUES('','$nama_barang','$jenis_barang')");

header("location:index.php?data=berhasil_ditambah");

?>