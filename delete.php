<?php

include "koneksi.php";
$id = $_GET["id"];

mysqli_query($koneksi, "DELETE FROM barang WHERE id='$id'");

header("location:index.php?data=berhasil_dihapus");

?>