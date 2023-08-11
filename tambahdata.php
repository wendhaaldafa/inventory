<?php 
    include 'koneksi.php';

    $nama_aplikasi = $_GET['nm'];
    $id = $_GET['id'];     
      $sql = "select * from tb_datadukung where id_aplikasi=$id";
      $list_data = mysqli_query($conn, $sql);


    if(isset($_GET['id_aplikasi'])) {
        $delete = mysqli_query($conn, "DELETE FROM tb_datadukung
        WHERE id_aplikasi = '".$_GET['id_aplikasi']."' ");

        echo '<script>window.location="tambahdata.php"</script>';
    }


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

                <div class="list-item">
                    <a href="cetak.php">
                    <i class="fa-solid fa-print" style="color: #000000; margin-right: 10px;"></i>
                        <span class="desk-header">Cetak</span>
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

        <h2 class="heading">
            Data Dukung <?php echo $nama_aplikasi;?>
        </h2>

        <div class="box">
        <tr>
            <th>
                <a href="upload.php?id=<?php echo $id;?>&nm=<?php echo $nama_aplikasi;?>"><input type="button" class="btn-simpan" value="Tambah Data"></a>
                <a href="cetak_data_dukung.php"><input type="button" class="btn-cetak"  value="Cetak"></a>
            </th>
        </tr>
        
        <table id="example" class="display" style="width:100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Data Dukung</th>
                    <th>File</th>
                    <th>Aksi</th>
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
                    <td><?php echo $row["nama_data"] ?></td>
                    <td>
                        <a href="<?php echo './berkas/'.$file; ?>" target="_blank"><?php echo $file;?></a>
                    </td>
                    <td>
                        <a href="tambahdata.php?id_aplikasi=<?php echo $id;?>" onclick="return confirm('Yakin')"><input type="button" class="btn-hapus" value="Hapus"></a>                    </td>
                    </tr>
                      <?php
                     $y++;
                    }
                 
                ?>
                
              </tbody> 
            </table>
            <a href="detail.php"><input type="button" class="btn-kembali2" value="Kembali"></a>
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