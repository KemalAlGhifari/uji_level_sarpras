<?php 
    include "konek.php";

    if (isset($_POST['simpan'])){
        $id_siswa = $_POST['Id_siswa'];
        $nama_siswa = $_POST['Nama_siswa'];
        $kelas = $_POST['Kelas_siswa'];
        $alamat = $_POST['Alamat_siswa'];
        $telepon = $_POST['Telepon'];

        $sql = "INSERT INTO `data_siswa` (`id_siswa`, `nama_siswa`, `kelas`, `alamat`, `no_telepon`) VALUES ('$id_siswa', '$nama_siswa', '$kelas', '$alamat', '$telepon');";
        $query = mysqli_query($con, $sql);

        if($query){
            header("Location: datasiswa.php");
        }else header("Location:simpan.php?status=gagal");
    }
?>