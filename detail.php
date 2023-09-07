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
        $harga = $row["harga"];
        $pic = $row["pic"];
        $url = $row["url"];
        $lisensi= $row["lisensi"];
        $masa_aktif = $row["masa_aktif"];
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" type="text/css" href="css/style.css";>
    <link rel="stylesheet" type="text/css" href="assets/datatable/cdn.datatables.net_1.13.5_css_jquery.dataTables.min.css";>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
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
                    <a href="dashboard.php">
                    <i class="fa-solid fa-house" style="color: #000000; margin-right: 8px;"></i>
                        <span class="desk-header">Dashboard</span>
                    </a>
                </div>

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
    <section class="box-formdetail">

        <div class="box">
        <h2 class="header-detail">
            Detail Aplikasi
        </h2>
            <table border="0" class="tabel-detail">
                <tr>
                    <td> Lisensi </td>
                    <td>:</td>
                    <td>
                        <?php if($id!=0){echo $lisensi;} ?>                    
                    </td>
                </tr>
                <tr>
                    <td> Kode Barang </td>
                    <td>:</td>
                    <td>
                        <?php if($id!=0){echo $kode_barang;} ?>                    
                    </td>
                </tr>
                <tr>
                    <td> Nama Barang</td>
                    <td>:</td>
                    <td>
                        <?php if($id!=0){echo $nama_aplikasi;} ?>
                    </td>
                </tr>
                <tr>
                    <td> Deskripsi </td>
                    <td>:</td>
                    <td>
                    <?php if($id!=0){echo $deskripsi_aplikasi;} ?>
                    </td>
                </tr>
                <tr>
                    <td> Tanggal Pembuatan </td>
                    <td>:</td>
                    <td>
                        <?php if($id!=0){echo $tgl_pembuatan;} ?>
                    </td>
                </tr>
                <tr>
                    <td> Pencipta </td>
                    <td>:</td>
                    <td>
                        <?php if($id!=0){echo $pencipta;} ?>
                    </td>
                </tr>
                <tr>
                    <td> Asal Usul </td>
                    <td>:</td>
                    <td>
                    <?php if($id!=0){echo $asal_usul;} ?>
                    </td>
                </tr>
                <tr>
                    <td> Harga </td>
                    <td>:</td>
                    <td>
                    <?php if($id!=0){echo number_format($harga);} ?>
                    </td>
                </tr>
                <tr>
                    <td> URL </td>
                    <td>:</td>
                    <td>
                        <?php if($id!=0){echo $url;} ?>
                    </td>
                </tr>
                <tr>
                    <td> Letak Server </td>
                    <td>:</td>
                    <td>
                        <?php if($id!=0){echo $server;} ?>
                    </td>
                </tr>
                <tr>
                    <td> IP Server </td>
                    <td>:</td>
                    <td>
                        <?php if($id!=0){echo $ip_server;} ?>
                </tr>
                <tr>
                    <td> SKPD Pengampu </td>
                    <td>:</td>
                    <td>
                        <?php if($id!=0){echo $SKPD_pengampu;} ?>
                    </td>
                </tr>
                <tr>
                    <td> Status </td>
                    <td>:</td>
                    <td>
                    <?php if($id!=0){echo $status_aplikasi;} ?>
                    </td>
                </tr>
                <tr>
                    <td> PIC </td>
                    <td>:</td>
                    <td>
                    <?php if($id!=0){echo $pic;} ?>
                    </td>
                </tr>
                <tr>
                    <td> Keterangan </td>
                    <td>:</td>
                    <td>
                        <?php if($id!=0){echo $keterangan;} ?>
                    </td>
                </tr>
                <tr>
                    <td> Masa Aktif </td>
                    <td>:</td>
                    <td>
                        <?php if($id!=0){echo $masa_aktif;} ?>
                    </td>
                </tr>
                

            </table>
            <div>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="list.php"><input type="button" class="btn-kembali2" value="Kembali"></a>
                        <a href="tambahdata.php?id=<?php echo $id;?>&nm=<?php echo $nama_aplikasi?>"><input type="button" class="btn-simpan2" value="Data Dukung"></a>
                    </td>
            </div>
        </div>
        </form>
    </section>
    </div>
</html>