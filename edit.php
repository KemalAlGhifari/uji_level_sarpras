<?php 
    include 'konek.php';

    if (isset($_POST['edit'])){
        $id_siswa = $_POST['id_siswa'];
        $nama_siswa = $_POST['nama_siswa'];
        $kelas = $_POST['kelas_siswa'];
        $alamat = $_POST['alamat_siswa'];
        $telepon = $_POST['telepon'];

        $sql = "UPDATE `data_siswa` SET `id_siswa` = '$id_siswa', `nama_siswa` = '$nama_siswa', `kelas` = '$kelas', `alamat` = '$alamat', `no_telepon` = '$telepon' WHERE `data_siswa`.`id_siswa` = $id_siswa;";
        $query = mysqli_query($con, $sql);
        if($query){
            header('Location: datasiswa.php');
        }else{
            header('Location: edit.php?status=gagal');
        }
    }
?>