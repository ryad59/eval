<?php


require $_SERVER['DOCUMENT_ROOT'] . '/model/db.php';

$request = $db->prepare("SELECT * FROM disc JOIN artist ON disc.artist_id = artist.artist_id WHERE disc_id=:id");
$request->bindValue(':id', $_GET['disc']);
$request->execute();
$data = $request->fetch(PDO::FETCH_OBJ);

