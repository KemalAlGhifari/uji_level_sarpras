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
                    <li><a class="siswa" href="datasiswa.php"><i class="fa-solid fa-users"></i>Data Siswa</a></li>
                    <li><a href="databarang.php"><i class="fa-solid fa-box"></i>Data Barang</a></li>
                </ul>
        </div>

        <div class="content">
            <h1 class="judul">Data Siswa</h1>
            <p>Halaman ini berisi data siswa sekolah SMK Taruna Bhakti</p>

            <div class="atastabel">
                <a class="create" href="insert.html"><button>CREATE +</button></a>
                <form method="GET" action="datasiswa.php" class="search" >
                    <input autocomplete="off" class="formcari" type="text" name="cari" value="<?php if(isset($_GET['cari'])){ echo $_GET['cari']; } ?>">
                    <button class="tombolcari"><i class="fa fa-search"></i></button>
                </form>
            </div>

            
            <div class="tables">
            <table style="border-top-left-radius: 10px;" class="tablesiswa">
                <tr>
                    <th>No</th>
                    <th>Id Siswa</th>
                    <th>Nama Siswa</th>
                    <th>Kelas Siswa</th>
                    <th>Alama Siswa</th>
                    <th>No Telepon</th>
                    <th>Action</th>
                </tr>

                <?php 
                    if(isset($_GET['cari'])){
                        $pencarian = $_GET['cari'];
                        $sql = "SELECT * FROM data_siswa WHERE id_siswa LIKE '%".$pencarian."%' or nama_siswa LIKE '%".$pencarian."%'";
                    }else{
                        $sql = "SELECT * FROM data_siswa";
                    }
                    $i = 1;
                    
                    $query = mysqli_query($con, $sql);
                    while($pel = mysqli_fetch_array($query)){
                        echo "
                            <tr>
                                <td>$i</td>
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
                        $i++;
                    }
                ?>
            </table>
        </div>
        </div>
    </div>
</body>
</html>