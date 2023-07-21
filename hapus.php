<?php 
    include 'koneksi.php';

    if(isset($_GET['id'])) {
        $delete = mysqli_query($conn, "DELETE FROM tb_inventori
        WHERE nama_aplikasi = '".$_GET['id']."' ");

        echo '<script>window.location="list.php"</script>';
    }
?>