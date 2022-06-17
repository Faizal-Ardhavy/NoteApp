<?php
$nama=$_GET["nama"];

include("connection.php");
if (isset($_POST["submit"])) {
    $namaBarang = $_POST["namaBarang"];
    $jenisBarang = $_POST["jenisBarang"];
    $jumlahBarang = $_POST["jumlahBarang"];
    $query = "INSERT INTO barang VALUES ('','$namaBarang ',' $jenisBarang','$jumlahBarang','')";
    mysqli_query($conn, $query);
    $tmp = $baru;
}
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Redirect</title>
      <meta http-equiv = "refresh" content = "1; url =index.php?nama=<?= $nama ?>" />
   </head>
   <body>
      <p><?="Berhasil menginput data"?></p>
   </body>
</html>