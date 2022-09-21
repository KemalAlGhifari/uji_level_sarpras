<?php 
include "konek.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <!-- css -->
    <link rel="stylesheet" href="stylebarang.css">

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
                    <li><a href="datasiswa.php"><i class="fa-solid fa-users"></i>Data Siswa</a></li>
                    <li><a class="barang" href="databarang.php"><i class="fa-solid fa-box"></i>Data Barang</a></li>
                </ul>
        </div>

        <div class="content">
            <h1 class="judul">Data Barang</h1>
            <p>Halaman ini berisi data barang sarpras sekolah SMK Taruna Bhakti</p>

            <div class="atastabel">
                <a class="create" href="insertbarang.html"><button>CREATE +</button></a>
                <form method="GET" action="databarang.php" class="search" >
                    <input autocomplete="off" class="formcari" type="text" name="caribarang" value="<?php if(isset($_GET['caribarang'])){ echo $_GET['caribarang']; } ?>">
                    <button class="tombolcari"><i class="fa fa-search"></i></button>
                </form>
            </div>
            
            <div class="tables"></div>
            <table class="tablesiswa">
                <tr>
                    <th>No</th>
                    <th>Id Barang</th>
                    <th>Nama Barang</th>
                    <th>Tgl Pembelian</th>
                    <th>Kondisi</th>
                    <th>Jumlah</th>
                    <th>Action</th>
                </tr>

                <?php 

                    if(isset($_GET['caribarang'])){
                        $pencarian = $_GET['caribarang'];
                        $sql = "SELECT * FROM data_barang WHERE id_barang LIKE '%".$pencarian."%' or nama_barang LIKE '%".$pencarian."%'";
                    }else{
                        $sql = "SELECT * FROM data_barang";
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
                                    <a href='feditbarang.php?id_barang=".$pel['id_barang']."'><button class='btnedit'>EDIT</button></a>
                                    <a href='fhapusbarang.php?id_barang=".$pel['id_barang']."'><button class='btnhapus'>HAPUS</button></a>
                                </td>
                            <tr>
                        ";
                        $i++;
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>