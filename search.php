<?php

if(isset($_POST['search'])) {
    include "koneksi.php";
    $no = 1;
    $search = $_POST['search'];
    $data = mysqli_query($koneksi, "SELECT * FROM barang WHERE nama_barang LIKE '%".$search."%' OR jenis_barang LIKE '%".$search."%'");
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

<?php } } ?>