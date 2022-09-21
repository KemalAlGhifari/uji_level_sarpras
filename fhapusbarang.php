<?php 
    include  "konek.php";
    $id_barang = $_GET['id_barang'];
    $sql = "SELECT * FROM data_barang WHERE id_barang='$id_barang'";
    $query = mysqli_query($con, $sql);
    $pel = mysqli_fetch_array($query);

    if(mysqli_num_rows($query) < 1){
        die ("data tidak ditemukan");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form hapus</title>
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css ">

    <!-- style css -->
    <link rel="stylesheet" href="stylehapusbarang.css">

    <!-- Quicksan -->
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
            <form action="hapusbarang.php" method="post">
                <div class="form">
                    <h1>FORM HAPUS DATA BARANG</h1>
                </div>
                <table class="tbinsert">
                    <tr>
                        <td>
                            <input value="<?php echo $pel['id_barang'] ?>" required="required" placeholder="Masukan Id Siswa" class="isi" type="hidden" name="id_barang">
                        </td>
                    </tr>
                    <tr>
                        <td><p ><label class="tulisan">Nama Barang</label></p></td>
                        <td>
                            <input disabled value="<?php echo $pel['nama_barang'] ?>" required="required" placeholder="Masukan Nama Siswa" class="isi" type="text" name="nama_barang">
                        </td>
                    </tr>
                    <tr>
                        <td><p ><label class="tulisan">Tgl Pembelian</label></p></td>
                        <td>
                            <input disabled value="<?php echo $pel['tgl_pembelian'] ?>" required="required" placeholder="Masukan Kelas Siswa" class="isi" type="text" name="tgl_pembelian">
                        </td>
                    </tr>
                    <tr>
                        <td><p ><label class="tulisan">Kondisi</label></p></td>
                        <td>
                            <input disabled value="<?php echo $pel['kondisi'] ?>" required="required" placeholder="Masukan Alamat Siswa" class="isi" type="text" name="kondisi">
                        </td>
                    </tr>
                    <tr>
                        <td><p ><label class="tulisan">Jumlah</label></p></td>
                        <td>
                            <input disabled value="<?php echo $pel['jumlah'] ?>" required="required" placeholder="Masukan No Telepon Siswa" class="isi" type="number" name="jumlah">
                        </td>
                    </tr>
                </table>
                <input class="btnsimpan" type="submit" name="hapusbarang" value="HAPUS">
                
            </form>
        </div>
    </div>

</body>
</html>