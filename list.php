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
    <title>List Form</title>
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
            <div class="list-item">
            </div>
    <section class="box-list">
        <div class="box">
        <h2 class="heading">
            Data Aplikasi
        </h2>
        <tr class="btn-tambahdata">
        <a href="form.php"><input type="button" class="btn-simpan" value="Tambah Aplikasi"></a>
        </tr>
        
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Aplikasi</th>
                    <th>Deskripsi Aplikasi</th>
                    <th>Tanggal Pembuatan</th>
                    <th>SKPD Pengampu</th>
                    <th>Status Aplikasi</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
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
                    <td><?php echo $y; ?></th>
                    <td><?php echo $row["nama_aplikasi"] ?></td>
                    <td><?php echo $row["deskripsi_aplikasi"] ?></td>
                    <td><?php echo $row["tgl_pembuatan"] ?></td>
                    <td><?php echo $row["SKPD_pengampu"] ?></td>
                    <td><?php echo $row["status_aplikasi"] ?></td>
                    <td><?php echo $row["keterangan"] ?></td>
                    <td>
                        <a href="edit.php?id_aplikasi=<?php echo $id_aplikasi; ?>"><input type="button" class="btn-edit" value="Edit"></a>
                        
                        <a href="detail.php?id_aplikasi=<?php echo $id_aplikasi; ?>"><input type="button" class="btn-detail" value="Detail"></a>
                        
                        <a href="hapus.php?id_aplikasi=<?php echo $id_aplikasi; ?>" onclick="return confirm('Yakin')"><input type="button" class="btn-hapus" value="Hapus"></a>
                    </td>
                    </tr>
                      <?php
                     $y++;
                    }
                 
                ?>
                
              </tbody> 
            </table>
            <tr class="btn-cetak2">
                <a href="cetak.php"><input type="button" class="btn-cetak2" value="Cetak"></a>
            </tr>
        </div>
        <br>
        

    </section>
    </div>
</body>
<footer>
    <script src="assets/datatable/code.jquery.com_jquery-3.7.0.js"></script>
    <script src="assets/datatable/cdn.datatables.net_1.13.5_js_jquery.dataTables.min.js"></script>
    <script>
$( document ).ready(function() {
    new DataTable('#example');
});
    </script>
</footer>
</html>