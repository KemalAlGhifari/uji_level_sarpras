<?php 
include "konek.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <!-- css -->
    <link rel="stylesheet" href="stylesiswa.css">

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css ">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="sidebar">
            <header><i class="fa-regular fa-circle-user"></i> ADMIN USER</header>
            <ul>
                    <li><a href=""><i class="fa-solid fa-users"></i>Data Siswa</a></li>
                    <li><a href=""><i class="fa-solid fa-box"></i>Data Barang</a></li>
                </ul>
        </div>

        <div class="content">
            <h1 class="judul">Data Siswa</h1>
            <p>Halaman ini berisi data siswa sekolah SMK Taruna Bhakti</p>

            <a class="create" href="insert.html"><button>CREATE +</button></a>
            
            <div class="tables"></div>
            <table class="tablesiswa">
                <tr>
                    <th>Id Siswa</th>
                    <th>Nama Siswa</th>
                    <th>Kelas Siswa</th>
                    <th>Alama Siswa</th>
                    <th>No Telepon</th>
                    <th>Action</th>
                </tr>

                <?php 
                    $sql = "SELECT * FROM data_siswa";
                    $query = mysqli_query($con, $sql);
                    while($pel = mysqli_fetch_array($query)){
                        echo "
                            <tr>
                                <td>$pel[0]</td>
                                <td>$pel[1]</td>
                                <td>$pel[2]</td>
                                <td>$pel[3]</td>
                                <td>$pel[4]</td>
                                <td>
                                    <a href='formedit.php?id_siswa=".$pel['id_siswa']."'><button class='btnedit'>EDIT</button></a>
                                    <a href='formhapus.php?id_siswa=".$pel['id_siswa']."'><button class='btnhapus'>HAPUS</button></a>
                                </td>
                            <tr>
                        ";
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>