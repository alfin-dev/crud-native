<?php
$id = $_GET['id'];
include 'connect.php';
$db = new database();
$data = $db->editdata($id);
// echo var_dump($data);
// die();
?>
<h1>Edit Data</h1>
<form action="proses.php" method="post">
    <label>Nama</label>
    <input type="text" name="nama" value="<?= $data->nama?>">
    <input type="hidden" name="nbi" value="<?= $data->nbi?>">
    <button type="submit" name="submit_edit">Simpan</button>
</form>