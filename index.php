<?php
$conn = mysqli_connect('localhost','root','','catatan');

$query = "SELECT * FROM note";
$data = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Perkuliahan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="redirect.php" method="POST">
        <div class="notes" id="app">
            <div class="notes__sidebar">
                <input class="notes__add" onclick="return confirm('Apakah Ingin Menambahkan pesanan ini ?')"
                type="submit" value="Add Note" name = "submit"\>
            <?php foreach($data as $d){ ?>
                    <div class="notes__list">
                        <div class="notes__list-item notes__list-item--selected">
                            <div class="notes__small-title"><?= $d["judul"] ?></div>
                            <div class="notes__small-body"><?= $d["isi"] ?></div>
                            <div class="notes__small-updated"><?= $d["waktu"] ?></div>
                            <a href="hapus.php?id=<?= $d['id'] ?>" class="btn btn btn-outline-danger"> Hapus</a>
                        </div>
                    </div>
            <?php } ?>
            </div>
                <div class="notes__preview">
                    <input class="notes__title" name="judul" type="text" placeholder="Enter a title..." required autocomplete="off" autofocus>
                    <textarea class="notes__body" name="isi" placeholder="Enter text..." required autocomplete="off" autofocus></textarea>
                    <label for="birthday">Tanggal: </label>
                    <input type="date" id="waktu" name="waktu"  required autocomplete="off" autofocus>
                </div>
        </div>
    </form>

</body>
</html>