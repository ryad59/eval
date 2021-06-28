<?php

require $_SERVER['DOCUMENT_ROOT'] . '/model/db.php';

$request = $db->query("SELECT * FROM artist ");
$ArtistData = $request->fetchAll(PDO::FETCH_OBJ);