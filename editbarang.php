<?php 
    include "konek.php";

    if (isset($_POST['editbarang'])){
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $tgl_pembelian = $_POST['tgl_pembelian'];
        $kondisi = $_POST['kondisi'];
        $jumlah = $_POST['jumlah'];

        $sql = "UPDATE `data_barang` SET `id_barang` = '$id_barang', `nama_barang` = '$nama_barang', `tgl_pembelian` = '$tgl_pembelian', `kondisi` = '$kondisi', `jumlah` = '$jumlah' WHERE `data_barang`.`id_barang` = $id_barang;";
        $query = mysqli_query($con, $sql);
        if($query){
            header('Location: databarang.php');
        }else{
            header('Location: edit.php?status=gagal');
        }
    }
?>