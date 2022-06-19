<?php
$conn = mysqli_connect('localhost', 'root', '', 'catatan');
$query = "SELECT * FROM note";
$data = mysqli_query($conn, $query);

function cut($text) {
    if(strlen($text) > 25){
        return substr($text, 0, 25).'...';
    }else{
        return $text;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <form action="redirect.php" method="POST">
        <div class="notes" id="app">
            <div class="notes__sidebar overflow-auto">
            <button class="notes__new" onclick="window.location= 'index.php'" type="button"><i class='bx bx-pencil'></i> New Note</button>
                <?php foreach ($data as $d) { ?>
                    <div class="notes__list" onclick="window.location='edit.php?id=<?= $d['id'] ?>';">
                        <div class="notes__list-item notes__list-item--selected">
                            <div class="notes__small-title"><?= cut($d["judul"]) ?></div>
                            <div class="notes__small-body"><?= cut($d["isi"]) ?></div>
                            <div class="notes__small-updated hstack gap-2">
                                <div class="ms-auto"><?= $d["waktu"] ?></div>
                                <div class="vr"></div>
                                <a href="hapus.php?id=<?= $d['id'] ?>" class="btn-del btn-sm pt-1"><i class='bx bx-trash'></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="notes__preview">
                <input class="notes__title" name="judul" type="text" placeholder="Enter a title..." required autocomplete="off" autofocus>
                <textarea class="notes__body" name="isi" placeholder="Enter text..." required autocomplete="off" autofocus></textarea>
                
                <div class="d-flex justify-content-end">
                    <button class="notes__add" onclick="return confirm('Save this note?')" type="submit" name="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: #ffffff;"><path d="M5 21h14a2 2 0 0 0 2-2V8a1 1 0 0 0-.29-.71l-4-4A1 1 0 0 0 16 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2zm10-2H9v-5h6zM13 7h-2V5h2zM5 5h2v4h8V5h.59L19 8.41V19h-2v-5a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v5H5z"></path></svg></button>
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>