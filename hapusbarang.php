<?php 
    include "konek.php";

    if (isset($_POST['hapusbarang'])){
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $tgl = $_POST['tgl_pembelian'];
        $kondisi = $_POST['kondisi'];
        $jumlah = $_POST['jumlah'];

        $sql = "DELETE FROM data_barang WHERE id_barang='$id_barang'";
        $query = mysqli_query($con, $sql);
        if($query){
            header('Location: databarang.php');
        }else{
            header('Location: edit.php?status=gagal');
        }
    }
?>