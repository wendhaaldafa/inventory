<?php
    include 'koneksi.php';

    if(isset($_POST['submit'])) {

        $insert = mysqli_query($conn, "insert into tb_inventori set

        nama_aplikasi = '$_POST[nama_aplikasi]',
        deskripsi_aplikasi = '$_POST[deskripsi_aplikasi]',
        tgl_pembuatan = '$_POST[tgl_pembuatan]',
        SKPD_pengampu = '$_POST[SKPD_pengampu]',
        server = '$_POST[server]'
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
</head>
<body>
    <!-- box Form -->
    <br>
        <a href="login.php">Keluar</a>

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
                    <td> SKPD Pengampu </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="SKPD_pengampu" class="input-control">
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
    
</body>
</html>