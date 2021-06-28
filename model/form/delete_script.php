<?php

require $_SERVER['DOCUMENT_ROOT'] . '/model/db.php';

$idDisc=$_POST['id'];

$request = $db->prepare("DELETE FROM disc WHERE disc_id=:disc_id");
$request->bindValue(':disc_id', $idDisc, PDO::PARAM_INT);
$request->execute();
$request->closeCursor();

header("Location:../../index.php");
exit;

