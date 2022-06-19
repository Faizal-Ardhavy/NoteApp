<?php
$conn = mysqli_connect('localhost','root','','catatan');
$id = mysqli_real_escape_string($conn, $_POST['id']);
$waktu = date('Y-m-d');
$nama = $_POST["judul"];
$isi = $_POST["isi"];
$query = "UPDATE note SET judul = '$nama', isi = '$isi', waktu = '$waktu' Where id = '$id'";
mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html>
   <head>
      <title>Updating</title>
      <meta http-equiv = "refresh" content = "0.01; url =edit.php?id=<?= $id ?>" />
   </head>
</html>
