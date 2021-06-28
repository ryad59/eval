<?php

require $_SERVER['DOCUMENT_ROOT'] . '../model/db.php';

$request = $db->query("SELECT * FROM disc JOIN artist ON disc.artist_id = artist.artist_id");
$data = $request->fetchAll(PDO::FETCH_OBJ);


