<?php 
    include 'koneksi.php';
         
      $sql = "select * from tb_inventori";
      $list_data = mysqli_query($conn, $sql);


?>

<h3>
    Upload File
</h3>

<form action="" method="post" enctype="multipart/form-data">
    <b>File Upload</b> <input type="file" name="Namafile">
    <input type="submit" name="proses" value="Upload">

</form>