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
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css";>
    <link rel="stylesheet" type="text/css" href="assets/datatable/cdn.datatables.net_1.13.5_css_jquery.dataTables.min.css";>

    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>

    <!-- box Form -->
    <section class="box-form">

        <h2 class="heading">
            Data Aplikasi
        </h2>

        <div class="box">
        
        <table id="example" class="display" style="width:100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Aplikasi</th>
                    <th>Deskripsi Aplikasi</th>
                    <th>Tanggal Pembuatan</th>
                    <th>SKPD Pengampu</th>
                    <th>Letak Server</th>
                    <th>IP Server</th>
                    <th>Aksi</th>
                </tr>
</thead>
<tbody>
                <?php $y = 1 ?>
                <?php 
                    // output data of each row
                    while($row = mysqli_fetch_assoc($list_data)){
                      ?>
                      <tr>
                    <th><?php echo $y; ?></th>
                    <th><?php echo $row["nama_aplikasi"] ?></th>
                    <th><?php echo $row["deskripsi_aplikasi"] ?></th>
                    <th><?php echo $row["tgl_pembuatan"] ?></th>
                    <th><?php echo $row["SKPD_pengampu"] ?></th>
                    <th><?php echo $row["server"] ?></th>
                    <th><?php echo $row["ip_server"] ?></th>
                    <th>
                        <a href="tambah.php <?php echo '?y=' .$y; ?>" >Edit</a>
                        <a href="hapus.php?id=<?php echo $row["nama_aplikasi"] ?>" onclick="return confirm('Yakin')">Hapus</a>
                    </th>
                    </tr>
                      <?php
                     $y++;
                    }
                 
                ?>
                
              </tbody> 
            </table>
            <a href="index.php" class="btn-simpan">Home</a> 
        </div>
        <br>
        

    </section>
    
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