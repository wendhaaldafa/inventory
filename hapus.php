<?php 
    include 'koneksi.php';

    if(isset($_GET['id_aplikasi'])) {
        $delete = mysqli_query($conn, "DELETE FROM tb_inventori
        WHERE id_aplikasi = '".$_GET['id_aplikasi']."' ");

        echo '<script>window.location="list.php"</script>';
    }

    if(isset($_GET['id_dtdk'])) {
        $nama_aplikasi = $_GET['nm'];
        $id = $_GET['id'];    
        $is_dtdk = $_GET['id_dtdk'];
        $delete = mysqli_query($conn, "DELETE FROM tb_datadukung WHERE id_data = '$is_dtdk' ");
    
        echo '<script>window.location="tambahdata.php?nm='.$nama_aplikasi.'&id='.$id.'"</script>';
    }

?>