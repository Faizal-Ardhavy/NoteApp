<?php
require './koneksi.php';

if (isset($_POST["submit"])) {
    $waktu = date('Y-m-d');
    $nama = $_POST["judul"];
    $isi = $_POST["isi"];
    $query = "INSERT INTO note VALUES ('','$nama','$isi','$waktu')";
    mysqli_query($conn, $query);
}
?>


<!DOCTYPE html>
<html>
   <head>
      <title>Redirect</title>
      <meta http-equiv = "refresh" content = "0.01; url =index.php" />
   </head>
</html>
