<?php include 'template/head.php';
include '../controller/artistController.php';
if (isset($_POST['submit'])) {
    require $_SERVER['DOCUMENT_ROOT'] . '/model/form/add_script.php';
}
?>

    <h1 class="mt-5">Ajouter un vinyle</h1>

    <form class="mt-5" action="#" method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-10">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title">
                <p id="err_title" class="text-danger"><?= $error['title'] ?? ''; ?></p>
                <div class="mt-5">
                    <label for="artist">Artist</label>
                    <select class="custom-select custom-select-lg mb-3" id="artist" name="artist">

                        <?php foreach ($data_artist as $artist): ?>
                            <option value="<?= $artist->artist_id; ?>"><?= $artist->artist_name; ?></option>
                        <?php endforeach; ?>

                    </select>
                </div>

                <div class="mt-5">
                    <label for="year">Year</label>
                    <input type="text" class="form-control" id="year" name="year" placeholder="year">
                    <p id="err_year" class="text-danger"><?= isset($error['year']) ? $error['year'] : ''; ?></p>
                </div>
                <div class="mt-5">
                    <label for="genre">Genre</label>
                    <input type="text" class="form-control" id="genre" name="genre"
                           placeholder="Enter genre (rock,pop, ...)">
                    <p id="err_genre" class="text-danger"><?= isset($error['genre']) ? $error['genre'] : ''; ?></p>
                </div>
                <div class="mt-5">
                    <label for="label">Label</label>
                    <input type="text" class="form-control" id="label" name="label"
                           placeholder="Enter label (EMI, Warner, Universale...">
                    <p id="err_label" class="text-danger"><?= isset($error['label']) ? $error['label'] : ''; ?></p>
                </div>
                <div class="mt-5">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                    <p id="err_price" class="text-danger"><?= isset($error['price']) ? $error['price'] : '';?></p>
                </div>

                <div class="mt-5">
                    <label for="picture" class="form-label">Choisir un fichier</label>
                    <input class="form-control" id="picture" type="file" name="fichier">
                    <p class="text-warning mt-3"><?= isset($error['fichier']) ? $error['fichier'] : ' '; ?></p>
                </div>
                <div class="mt-5">
                    <input type="submit" class="btn btn-warning btn-sm" name="submit" id="submit" value="Ajouter">
                </div>
            </div>
        </div>

    </form>

    <script src="../../assets/js/formValid.js"></script>
