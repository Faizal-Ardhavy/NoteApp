<?php
$conn = mysqli_connect('sql109.epizy.com','epiz_31988867','srQpuAHcJp8y','epiz_31988867_catatan'); 

//$_GET[id] untuk mengambil nilai dari address bar ?id=nilainya 
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM note WHERE id = '$id'");

if($query) {
	echo "Data Terhapus";

header("location:index.php");

}else{

echo "Data tidak terhapus";

}

?>
