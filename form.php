<?php
    include 'koneksi.php';

    if(isset($_POST['submit'])) {

        $insert = mysqli_query($conn, "insert into tb_inventori set

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
        keterangan = '$_POST[keterangan]',
        harga = '$_POST[harga]',
        pic = '$_POST[pic]',
        url = '$_POST[url]',
        lisensi = '$_POST[lisensi]',
        masa_aktif = '$POST[masa_aktif]';
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
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css";>
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
    <section class="box-form">
        <form action="" method="post">

        <div class="box">
        <h2 class="heading">
            Form Pendataan
        </h2>
            <table border="0" class="tabel-form">
                <tr>
                    <td> Lisensi </td>
                    <td>:</td>
                    <td>
                        <select name="lisensi" class="input-control">
                            <option value="">--Pilih--</option>
                            <option value="Lisensi">Lisensi</option>
                            <option value="Aplikasi">Aplikasi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> Kode Barang </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="kode_barang" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td> Nama Barang</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama_aplikasi" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td> Deskripsi </td>
                    <td>:</td>
                    <td>
                    <textarea id="deskripsi_aplikasi" name="deskripsi_aplikasi" rows="4" cols="50" class="input-deks"></textarea>
                    </td>
                </tr>
                <tr>
                    <td> Tanggal Pembuatan </td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tgl_pembuatan" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td> Pencipta </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="pencipta" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td> Asal Usul </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="asal_usul" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td> Harga </td>
                    <td>:</td>
                    <td>
                        <input type="number" name="harga" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td> URL </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="url" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td> Letak Server </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="server" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td> IP Server </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="ip_server" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td> SKPD Pengampu </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="SKPD_pengampu" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td> Status </td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="status_aplikasi" class="input-control2" value="Aktif">Aktif
                        <input type="radio" name="status_aplikasi" class="input-control2" value="Tidak Aktif">Tidak Aktif
                    </td>
                </tr>
                <tr>
                    <td> PIC </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="pic" class="input-control">
                    </td>
                </tr>
                <tr>
                    <td> Keterangan </td>
                    <td>:</td>
                    <td>
                    <textarea id="keterangan" name="keterangan" rows="4" cols="50" class="input-deks"></textarea>
                    </td>
                </tr>
                <tr>
                    <td> Masa Aktif </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="masa_aktif" class="input-control">
                    </td>
                </tr>
                <tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
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