<?php 
    include  "konek.php";
    $id_siswa = $_GET['id_siswa'];
    $sql = "SELECT * FROM data_siswa WHERE id_siswa='$id_siswa'";
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
    <link rel="stylesheet" href="stylehapus.css">

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
                <li><a class="siswa" href="datasiswa.php"><i class="fa-solid fa-users"></i>Data Siswa</a></li>
                <li><a href="databarang.php"><i class="fa-solid fa-box"></i>Data Barang</a></li>
            </ul>
        </div>
        <div class="content">
            <form action="hapus.php" method="post">
                <div class="form">
                    <h1>FORM HAPUS DATA SISWA</h1>
                </div>
                <table class="tbinsert">
                    <tr>
                        <td>
                            <input value="<?php echo $pel['id_siswa'] ?>" required="required" placeholder="Masukan Id Siswa" class="isi" type="hidden" name="Id_siswa">
                        </td>
                    </tr>
                    <tr>
                        <td><p ><label class="tulisan">Nama Siswa</label></p></td>
                        <td>
                            <input disabled value="<?php echo $pel['nama_siswa'] ?>" required="required" placeholder="Masukan Nama Siswa" class="isi" type="text" name="Nama_siswa">
                        </td>
                    </tr>
                    <tr>
                        <td><p ><label class="tulisan">Kelas Siswa</label></p></td>
                        <td>
                            <input disabled value="<?php echo $pel['kelas'] ?>" required="required" placeholder="Masukan Kelas Siswa" class="isi" type="text" name="Kelas_siswa">
                        </td>
                    </tr>
                    <tr>
                        <td><p ><label class="tulisan">Alamat</label></p></td>
                        <td>
                            <input disabled value="<?php echo $pel['alamat'] ?>" required="required" placeholder="Masukan Alamat Siswa" class="isi" type="text" name="Alamat_siswa">
                        </td>
                    </tr>
                    <tr>
                        <td><p ><label class="tulisan">No Telepon</label></p></td>
                        <td>
                            <input disabled value="<?php echo $pel['no_telepon'] ?>" required="required" placeholder="Masukan No Telepon Siswa" class="isi" type="number" name="Telepon">
                        </td>
                    </tr>
                </table>
                <input class="btnsimpan" type="submit" name="hapus" value="HAPUS">
                
            </form>
        </div>
    </div>

</body>
</html>
