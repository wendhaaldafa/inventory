<?php 
    include 'koneksi.php';
         
      $id = $_GET['id_aplikasi'];
      $ambilData = mysqli_query($conn, "SELECT * FROM tb_inventori WHERE id_aplikasi='$id'");
      while($row = mysqli_fetch_array($ambilData)){
        $nama_aplikasi = $row["nama_aplikasi"];
        $deskripsi_aplikasi = $row["deskripsi_aplikasi"];
        $tgl_pembuatan = $row["tgl_pembuatan"];
        $SKPD_pengampu = $row["SKPD_pengampu"];
        $server = $row["server"];
        $ip_server = $row["ip_server"];
        $kode_barang = $row["kode_barang"];
        $pencipta = $row["pencipta"];
        $asal_usul = $row["asal_usul"];
        $status_aplikasi = $row["status_aplikasi"];
        $keterangan = $row["keterangan"];
      }

      if(isset($_POST['submit'])) {

        $insert = mysqli_query($conn, "update tb_inventori set

        nama_aplikasi = '$_POST[nama_aplikasi]',
        deskripsi_aplikasi = '$_POST[deskripsi_aplikasi]',
        tgl_pembuatan = '$_POST[tgl_pembuatan]',
        SKPD_pengampu = '$_POST[SKPD_pengampu]',
        server = '$_POST[server]',
        ip_server = '$_POST[ip_server]',
        kode_barang = '$_POST[kode_barang]',
        pencipta = '$_POST[pencipta]',
        asal_usul = '$_POST[asal_usul]',
        status_aplikasi = '$_POST[status_aplikasi]',
        keterangan = '$_POST[keterangan]' 
        where id_aplikasi=$id
        ");

        if($insert) {
            echo '<script>window.location="list.php"</script>';
        }else {
            echo 'huft'.mysqli_error($conn);
        }   

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.min.css">
</head>
<body>
<div class="container">
        <div class="sidebar">
            <div class="header">
                    <a href="#">
                        <span class="desk-header">Diskominfo Kab.Malang</span>
                    </a>
                <div class="logo2">
                <img src="CSS/img/Logo_of_Ministry_of_Communication_and_Information_Technology_of_the_Republic_of_Indonesia.svg.png" alt="" class="icon2" width="100px">
                </div>
            </div>

            <div class="header-line">

            </div>

            <div class="main">
                <div class="list-item">
                    <a href="form.php">
                    <i class="fa-solid fa-clipboard" style="color: #000000; margin-right: 10px; margin-left: 3px;"></i>
                        <span class="desk-header">Form Aplikasi</span>
                    </a>
                </div>

                <div class="list-item">
                    <a href="list.php">
                    <i class="fa-solid fa-list-ul" style="color: #000000; margin-right: 10px;"></i>
                        <span class="desk-header">List Data</span>
                    </a>
                </div>

                <div class="keluar">
                    <a href="index.php">
                    <i class="fa-solid fa-right-from-bracket" style="color: #000000; margin-right: 10px;"></i>
                        <span class="btn-keluar">Keluar</span>
                    </a>
                </div>
            </div>
        </div>

    <!-- box Form -->
    <div class="main-content">
    <section class="box-form">

        <h2 class="heading">
            Form Pendataan Aplikasi
        </h2>
        

        <form action="" method="post">

        <div class="box">
            <table border="0" class="tabel-form">
                <tr>
                    <td> Nama Applikasi</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama_aplikasi" value="<?php if($id!=0){echo $nama_aplikasi;} ?>" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td> Deskripsi </td>
                    <td>:</td>
                    <td>
                    <textarea id="deskripsi_aplikasi" name="deskripsi_aplikasi" rows="4" cols="50" class="input-deks"><?php if($id!=0){echo $deskripsi_aplikasi;} ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td> Tanggal Pembuatan </td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tgl_pembuatan" value="<?php if($id!=0){echo $tgl_pembuatan;} ?>" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td> SKPD Pengampu </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="SKPD_pengampu" value="<?php if($id!=0){echo $SKPD_pengampu;} ?>" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td> Letak Server </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="server" value="<?php if($id!=0){echo $server;} ?>" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td> IP Server </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="ip_server" value="<?php if($id!=0){echo $ip_server;} ?>" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td> Kode Barang </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="kode_barang" value="<?php if($id!=0){echo $kode_barang;} ?>" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td> Pencipta </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="pencipta" value="<?php if($id!=0){echo $pencipta;} ?>" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td> Asal Usul </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="asal_usul" value="<?php if($id!=0){echo $asal_usul;} ?>" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td> Status Aplikasi </td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="status_aplikasi" class="input-control2" value="<?php if($id!=0){echo $status_aplikasi;} ?>">Aktif
                        <input type="radio" name="status_aplikasi" class="input-control2" value="<?php if($id!=0){echo $status_aplikasi;} ?>">Tidak Aktif
                    </td>
                </tr>
                <tr>
                    <td> Keterangan </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="keterangan" value="<?php if($id!=0){echo $keterangan;} ?>" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="list.php"><input type="button" class="btn-kembali" value="Kembali"></a>
                        <input type="submit" name="submit" class="btn-simpan" value="Simpan">
                    </td>
                </tr>

            </table>
        </div>
        </form>
    </section>
    </div>
</body>
</html>