<?php
require $_SERVER['DOCUMENT_ROOT'] . '/model/db.php';


$title=htmlspecialchars($_POST['title']);
$year=htmlspecialchars($_POST['year']);
$genre=htmlspecialchars($_POST['genre']);
$label=htmlspecialchars($_POST['label']);
$price=htmlspecialchars($_POST['price']);
$idArtist=htmlspecialchars($_POST['artiste_id']);
$id=htmlspecialchars($_GET['disc']);
$modifyArtiste=$title . '.' . substr(strrchr($_FILES['img']['name'], '.'), 1);
$error = array();

if ($_FILES['img']['size'] > 0) {
    $typePicture = array("image/gif", "image/jpeg", "image/png", "image/pjpeg");
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $minePicture = finfo_file($finfo, $_FILES["img"]["tmp_name"]);
    finfo_close($finfo);

    if (in_array($minePicture, $typePicture))
    {
        move_uploaded_file($_FILES["img"]["tmp_name"], "../../assets/img/" . $title . '.' . substr(strrchr($_FILES['img']['name'], '.'), 1));
    }

    else
    {
        $error['img'] = 'img pas autorisé';
    }

    $request = $db->prepare("UPDATE disc SET disc_title=:title, disc_year=:year,disc_genre=:genre, disc_label=:label,disc_price=:price,artist_id=:artiste_id,disc_picture=:picture WHERE disc_id=:disc_id;");
    $request->bindValue(':picture', $modifyArtiste);
    }

    else
    {
        $request = $db->prepare("UPDATE disc SET disc_title=:title, disc_year=:year,disc_genre=:genre, disc_label=:label,disc_price=:price,artist_id=:artiste_id WHERE disc_id=:disc_id;");
    }

$request->bindValue(':title', $title);
$request->bindValue(':year', $year);
$request->bindValue(':genre', $genre);
$request->bindValue(':label', $label);
$request->bindValue(':price', $price);
$request->bindValue(':artiste_id', $idArtist);
$request->bindValue(':disc_id', $id);

if ($request->execute()) {
    $request->closeCursor();
    header("location: ../../index.php");
}


