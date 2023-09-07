<?php 
    include 'koneksi.php';
         
      $sql = "select * from tb_inventori";
      $list_data = mysqli_query($conn, $sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data</title>
    <link rel="stylesheet" type="text/css" href="css/style.css";>
    <link rel="stylesheet" type="text/css" href="assets/datatable/cdn.datatables.net_1.13.5_css_jquery.dataTables.min.css";>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <script> 
        window.print();
    </script>
</head>
<body>
    <section class="box-cetak">

        <h2 class="header-cetak">
            Data Aplikasi
        </h2>
        
        <table border="1" class="tabel-cetak" style="width:100% ">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Aplikasi</th>
                    <th>Deskripsi Aplikasi</th>
                    <th>Tanggal Pembuatan</th>
                    <th>SKPD Pengampu</th>
                    <th>Status Aplikasi</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php $y = 1 ?>
                <?php 
                    // output data of each row
                    while($row = mysqli_fetch_array($list_data)){
                        $id_aplikasi = $row["id_aplikasi"];
                      ?>
                      <tr>
                    <td><?php echo $y; ?></td>
                    <td><?php echo $row["nama_aplikasi"] ?></td>
                    <td><?php echo $row["deskripsi_aplikasi"] ?></td>
                    <td><?php echo $row["tgl_pembuatan"] ?></td>
                    <td><?php echo $row["SKPD_pengampu"] ?></td>
                    <td><?php echo $row["status_aplikasi"] ?></td>
                    <td><?php echo $row["keterangan"] ?></td>
                    </tr>
                      <?php
                     $y++;
                    }
                 
                ?>
                
              </tbody> 
            </table>
    </section>
    </div>
</body>
</html>