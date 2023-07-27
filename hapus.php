<?php 
    include 'koneksi.php';

    if(isset($_GET['id_aplikasi'])) {
        $delete = mysqli_query($conn, "DELETE FROM tb_inventori
        WHERE id_aplikasi = '".$_GET['id_aplikasi']."' ");

        echo '<script>window.location="list.php"</script>';
    }
?>