<?php
    include 'koneksi.php';

    if(isset($_POST['submit'])) {

        $insert = mysqli_query($conn, "insert into tb_datadukung set

        nama_data = '$_POST[nama_data]',
        file = '$_POST[file]',
        ");

        if($insert) {
            echo '<script>window.location="tambahdata.php"</script>';
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
    <title>Upload</title>
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
                    <i class="fa-solid fa-house" style="color: #000000; margin-right: 10px;"></i>
                        <span class="desk-header">Beranda</span>
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

        <div class="main-content">
        <section class="box-form">
            
            <form action="" method="post" enctype="multipart/form-data">

            <div class="box">
                <table border="0" class="tabel-form">
                <h3 class="heading-detail">
                    Upload File
                </h3>
                <tr>
                    <td> Nama Data Dukung</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="Namadata" class="input-control">
                    </td>
                </tr>

                <tr>
                    <td> File Upload</td>
                    <td>:</td>
                    <td>
                        <input type="file" name="Namafile" class="input-control">
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td>
                    <a href="tambahdata.php"><input type="button" value="Kembali" class="btn-kembali"></a>
                    <input type="submit" name="submit" value="Upload" class="btn-simpan">
                    </td>
                </tr>

            
</table>
            </div>

            </form>
        </section>
        </div>
    
    <script> scr="script.js"</script>
</body>
</html>

