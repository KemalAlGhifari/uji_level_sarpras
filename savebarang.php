<?php 
    include "konek.php";

    if (isset($_POST['savebarang'])){
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $tanggal = $_POST['tgl_pembelian'];
        $kondisi = $_POST['kondisi'];
        $jumlah = $_POST['jumlah'];

        $sql = "INSERT INTO `data_barang` (`id_barang`, `nama_barang`, `tgl_pembelian`, `kondisi`, `jumlah`) VALUES ('$id_barang', '$nama_barang', '$tanggal', '$kondisi', '$jumlah');";
        $query = mysqli_query($con, $sql);

        if($query){
            header("Location: databarang.php");
        }else {header("Location:simpan.php?status=gagal");
        }
    }
?>