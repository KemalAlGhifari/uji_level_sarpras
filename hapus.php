<?php 
    include "konek.php";

    if (isset($_POST['hapus'])){
        $id_siswa = $_POST['Id_siswa'];
        $nama_siswa = $_POST['Nama_siswa'];
        $kelas = $_POST['Kelas_siswa'];
        $alamat = $_POST['Alamat_siswa'];
        $telepon = $_POST['Telepon'];

        $sql = "DELETE FROM data_siswa WHERE id_siswa='$id_siswa'";
        $query = mysqli_query($con, $sql);
        if($query){
            header('Location: datasiswa.php');
        }else{
            header('Location: edit.php?status=gagal');
        }
    }
?>