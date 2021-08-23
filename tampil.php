<?php
include 'connect.php';
$db = new database();
?>
<h1>Tampil data</h1>
<a href="tambah.php" class="href">Input Data</a>
<table>
    <tr>
        <td>No.</td>
        <td>Nama</td>
        <td>NBI</td>
        <td>Aksi</td>
    </tr>
    <?php $no = 1;
    $hasil = $db->tampildata();
    foreach($hasil as $x)  {
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $x->nama; ?></td>
        <td><?= $x->nbi; ?></td>
        <td><a href="edit.php?id=<?=$x->id?>" class="href">Edit</a></td>
        <td><a href="proses.php?id=<?=$x->id?>" class="href">Hapus</a></td>
    </tr>
    <?php } ?>

</table>