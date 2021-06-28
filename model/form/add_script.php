<?php
require $_SERVER['DOCUMENT_ROOT'] . '/model/db.php';

$title=htmlspecialchars($_POST['title']);
$year=htmlspecialchars($_POST['year']);
$genre=htmlspecialchars($_POST['genre']);
$label=htmlspecialchars($_POST['label']);
$price=htmlspecialchars($_POST['price']);
$idArtist=htmlspecialchars($_POST['artist']);
$modifyPicture=$title.'.'.substr(strrchr($_FILES['img']['name'],'.'),1);

$error=array();

$typePicture = array("image/gif","image/jpeg","image/png","image/pjpeg");
$finfo= finfo_open(FILEINFO_MIME_TYPE);
$minePicture=finfo_file($finfo, $_FILES["img"]["tmp_name"]);
finfo_close($finfo);

if (in_array($minePicture, $typePicture)){
    move_uploaded_file($_FILES["img"]["tmp_name"],"../../assets/img/".$title.'.'.substr(strrchr($_FILES['img']['name'],'.'),1));

}else{
    $error['img']='img pas autorisé';
}
$request = $db-> prepare("INSERT INTO disc (disc_title, disc_year,disc_genre, disc_label,disc_price,disc_picture,artist_id)VALUES (:title,:year,:genre,:label,:price,:picture,:artist);" );

$request->bindValue(':title',$title);
$request->bindValue(':year',$year);
$request->bindValue(':genre',$genre);
$request->bindValue(':label',$label);
$request->bindValue(':price',$price);
$request->bindValue(':picture',$modifyPicture);
$request->bindValue(':artist',$idArtist);
if ($request->execute()){
    $request->closeCursor();
    header("location: ../../index.php");
}





