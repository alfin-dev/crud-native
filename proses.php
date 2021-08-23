<?php
include 'connect.php';
$db = new database();
if (isset($_POST['submit_edit'])){
    $nama = $_POST['nama'];
    $nbi = $_POST['nbi'];
    $db->update($nama,$nbi);
    header('location:tampil.php');
}
else if (isset($_POST['tambah_data'])){
    $nama = $_POST['nama'];
    $nbi = $_POST['nbi'];
    $db->tambahdata($nama,$nbi);
    header('location:tampil.php');
}
else if (isset($_GET['id'])){
    $id = $_GET['id'];
    $db->delete($id);
    header('location:tampil.php');
}
?>