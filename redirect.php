<?php
$conn = mysqli_connect('sql109.epizy.com','epiz_31988867','srQpuAHcJp8y','epiz_31988867_catatan');
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
