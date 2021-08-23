<?php
class database{
public function koneksi(){
    $host = "localhost";
    $database = "oop";
    $username = "root";
    $password = "";
    $connect = new mysqli($host, $username, $password, $database);
    return $connect;
 }
 public function __construct(){
     $this->conn = $this->koneksi();
 }

    function tampildata(){
        $data = $this->conn->query("select * from mhs");
        while ($obj = $data->fetch_object()) {
            $baris[] = $obj;
        }
        if(!empty($baris)){
            return $baris;
        }
    }
    function editdata($id){
        $data = $this->conn->query("select * from mhs where id='$id'");
        while ($obj = $data->fetch_object()) {
        $baris = $obj;
    }
        return $baris;
    }
    function tambahdata($nama,$nbi)
    {
        $sql = "INSERT INTO mhs (nama,nbi)VALUES ('$nama','$nbi')";
        $this->conn->query($sql);
    }
    function update($nama,$nbi)
    {
        // $na=$this->na($nama,$nbi);
        $sql = "UPDATE mhs SET nama='$nama' WHERE nbi='$nbi'";
        $this->conn->query($sql);
    }
    function delete ($id)
    {
        $sql = "DELETE FROM mhs WHERE id='$id'";
        $this->conn->query($sql);
    }
}
?>