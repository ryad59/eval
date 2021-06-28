<?php
include 'template/head.php';
include '../controller/artistController.php';
include '../controller/detailController.php';
?>


    <h1 class="mt-5">Details</h1>
    <form id="form" method="post" action="#" enctype="multipart/form-data">
        <div class="row">

            <div class="col-6 mt-4">
                <label for="titleDisc">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= $data->disc_title ?>"
                       disabled>
                <div id="titleErr" class="text-danger"></div>
            </div>
            <div class="col-6 mt-4">
                <label for="artist">Artist</label>
                <select class="custom-select custom-select-lg" id="artiste" name="artiste_id">

                    <?php foreach ($data_artist as $artist): ?>

                        <option value="<?= $artist->artist_id; ?>" <?= $data->artist_id == $artist->artist_id ? 'selected' : '' ?>
                                disabled>
                            <?= $artist->artist_name; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-6 mt-4">
                <label for="year">Year</label>
                <input type="text" class="form-control" id="year" name="year" value="<?= $data->disc_year ?>" disabled>
                <div id="yearErr" class="text-danger"></div>
            </div>
            <div class="col-6 mt-4">
                <label for="genre">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" value="<?= $data->disc_genre ?>"
                       disabled>
                <div id="genreErr" class="text-danger"></div>
            </div>
            <div class="col-6 mt-4">
                <label for="label">Label</label>
                <input type="text" class="form-control" id="label" name="label" value="<?= $data->disc_label ?>"
                       disabled>
                <div id="labelErr" class="text-danger"></div>
            </div>
            <div class="col-6 mt-4">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="<?= $data->disc_price ?>"
                       disabled>
                <div id="priceErr" class="text-danger"></div>
            </div>


        </div>

        <div>
            <p class="mt-4">Picture</p>
            <img class="img-thumbnail  w-50" src="../../assets/fichier/<?= $data->disc_picture ?>" alt="album_picture">
        </div>

        <div class="mt-4">
            <a href="<?="viewModif.php?disc=" . $data->disc_id ?>" class="btn btn-warning btn-sm">Modifier</a>
            <a href="<?= "viewDelete.php?disc=" . $data->disc_id ?>" class="btn btn-danger btn-sm">Supprimer</a>
            <a href="../../index.php" class="btn btn-primary btn-sm">Retour</a>
        </div>

    </form>
