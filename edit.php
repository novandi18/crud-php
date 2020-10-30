<?php

include "koneksi.php";

$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$jenis_barang = $_POST['jenis_barang'];

mysqli_query($koneksi, "UPDATE barang SET nama_barang='$nama_barang', jenis_barang='$jenis_barang' WHERE id='$id'");

header("location:index.php?data=berhasil_diedit");

?>