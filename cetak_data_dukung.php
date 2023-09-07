<?php 
    include 'koneksi.php';

    $nama_aplikasi = $_GET['nm'];  
    $id = $_GET['id'];   
    $sql = "select * from tb_datadukung where id_aplikasi=$id";
    $list_data = mysqli_query($conn, $sql);

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
    <title>Cetak Data Dukung</title>
    <link rel="stylesheet" type="text/css" href="css/style.css";>
    <link rel="stylesheet" type="text/css" href="assets/datatable/cdn.datatables.net_1.13.5_css_jquery.dataTables.min.css";>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <script>window.print(); </script>
</head>
<body>
    <section class="box-cetak">
        <h2 class="header-cetak">
            Data Aplikasi
        </h2>
            <table border="0" class="tabel-cetak" style="width:100%; text-align: 'left';">
            <tr class="text-cetak">
                    <td> Lisensi </td>
                    <td>:</td>
                    <td>
                        <?php if($id!=0){echo $lisensi;} ?>                    
                    </td>
                </tr>
                <tr class="text-cetak">
                    <td> Kode Barang </td>
                    <td>:</td>
                    <td>
                        <?php if($id!=0){echo $kode_barang;} ?>                    
                    </td>
                </tr>
                <tr class="text-cetak">
                    <td> Nama Barang</td>
                    <td>:</td>
                    <td>
                        <?php if($id!=0){echo $nama_aplikasi;} ?>
                    </td>
                </tr>
                <tr class="text-cetak">
                    <td> Deskripsi </td>
                    <td>:</td>
                    <td>
                    <?php if($id!=0){echo $deskripsi_aplikasi;} ?>
                    </td>
                </tr>
                <tr class="text-cetak">
                    <td> Tanggal Pembuatan </td>
                    <td>:</td>
                    <td>
                        <?php if($id!=0){echo $tgl_pembuatan;} ?>
                    </td>
                </tr>
                <tr class="text-cetak">
                    <td> Pencipta </td>
                    <td>:</td>
                    <td>
                        <?php if($id!=0){echo $pencipta;} ?>
                    </td>
                </tr>
                <tr class="text-cetak">
                    <td> Asal Usul </td>
                    <td>:</td>
                    <td>
                    <?php if($id!=0){echo $asal_usul;} ?>
                    </td>
                </tr>
                <tr class="text-cetak">
                    <td> Harga </td>
                    <td>:</td>
                    <td>
                    <?php if($id!=0){echo number_format($harga);} ?>
                    </td>
                </tr>
                <tr class="text-cetak">
                    <td> URL </td>
                    <td>:</td>
                    <td>
                        <?php if($id!=0){echo $url;} ?>
                    </td>
                </tr>
                <tr class="text-cetak">
                    <td> Letak Server </td>
                    <td>:</td>
                    <td>
                        <?php if($id!=0){echo $server;} ?>
                    </td>
                </tr>
                <tr class="text-cetak">
                    <td> IP Server </td>
                    <td>:</td>
                    <td>
                        <?php if($id!=0){echo $ip_server;} ?>
                </tr>
                <tr class="text-cetak">
                    <td> SKPD Pengampu </td>
                    <td>:</td>
                    <td>
                        <?php if($id!=0){echo $SKPD_pengampu;} ?>
                    </td>
                </tr>
                <tr class="text-cetak">
                    <td> Status </td>
                    <td>:</td>
                    <td>
                    <?php if($id!=0){echo $status_aplikasi;} ?>
                    </td>
                </tr>
                <tr class="text-cetak">
                    <td> PIC </td>
                    <td>:</td>
                    <td>
                    <?php if($id!=0){echo $pic;} ?>
                    </td>
                </tr>
                <tr class="text-cetak">
                    <td> Keterangan </td>
                    <td>:</td>
                    <td>
                        <?php if($id!=0){echo $keterangan;} ?>
                    </td>
                </tr>
                <tr class="text-cetak">
                    <td> Masa Aktif </td>
                    <td>:</td>
                    <td>
                        <?php if($id!=0){echo $masa_aktif;} ?>
                    </td>
                </tr>
            </table>
    </section>
    <section class="box-list">

<h2 class="header-cetak">
    Data Dukung <?php echo $nama_aplikasi;?>
</h2>

<div class="box-cetak">

<table border="1" class="tabel-cetak" style="width:100%">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Data Dukung</th>
            <th>File</th>
        </tr>
</thead>
<tbody>
        <?php $y = 1 ?>
        <?php 
            // output data of each row
            while($row = mysqli_fetch_array($list_data)){
                $id_aplikasi = $row["id_data"];
                $file = $row["file"];
              ?>
              <tr>
            <td><?php echo $y; ?></th>
            <td style="text-align: center;"><?php echo $row["nama_data"] ?></td>
            <td style="text-align: center;">
                <a href="<?php echo './berkas/'.$file; ?>" target="_blank"><?php echo $file;?></a>
            </td>
              <?php
             $y++;
            }
         
        ?>
        
      </tbody> 
    </table>
</div>
</section>
</html>