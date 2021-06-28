<?php
include 'template/head.php';
include '../controller/detailController.php';
?>

<div class="text-center">
     <img class="img-thumbnail w-50 mt-5" src="../../assets/fichier/<?= $data->disc_picture ?>" alt="album_picture">
      <h1>vous voulez vraiment supprimer<?= $data->disc_title ?> <?= $data->artist_name ?> de la base de données ?</h1>
</div>

    <form method="post" action="../model/form/delete_script.php" class="text-center">
        <input type="text" hidden class="form-control" name="id" value="<?php echo $data->disc_id ?>">
        <button type="submit" class="btn btn-danger">Supprimer</button>
        <a href="<?= "viewDetail.php?disc=" . $_GET['disc'] ?>">
            <button type="button" class="btn btn-info" name="retour">Annuler</button>
        </a>
    </form>

.