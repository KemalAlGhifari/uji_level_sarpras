<?php 
    include "konek.php";

    if (isset($_POST['save'])){
        $id_siswa = $_POST['id_siswa'];
        $nama_siswa = $_POST['nama_siswa'];
        $kelas = $_POST['kelas_siswa'];
        $alamat = $_POST['alamat_siswa'];
        $telepon = $_POST['telepon'];

        $sql = "INSERT INTO `data_siswa` (`id_siswa`, `nama_siswa`, `kelas`, `alamat`, `no_telepon`) VALUES ('$id_siswa', '$nama_siswa', '$kelas', '$alamat', '$telepon');";
        $query = mysqli_query($con, $sql);

        if($query){
            header("Location: datasiswa.php");
        }else header("Location:simpan.php?status=gagal");
    }
?>