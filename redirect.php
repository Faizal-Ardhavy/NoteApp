<?php
$conn = mysqli_connect('localhost','root','','catatan');
if (isset($_POST["submit"])) {
    $nama = $_POST["judul"];
    $isi = $_POST["isi"];
    $waktu = $_POST["waktu"];
    $query = "INSERT INTO note VALUES ('','$nama','$isi','$waktu')";
    mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Redirect</title>
      <meta http-equiv = "refresh" content = "0.25; url =index.php" />
   </head>
   <body>
      <p><?="Berhasil menginput catatan"?></p>
   </body>
</html>