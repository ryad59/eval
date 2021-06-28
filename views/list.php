<?php include "../controller/listController.php";
include 'template/head.php';?>

<body>
<div class="container-fluid">
        <div class="d-flex justify-content-between">
            <h1 class="mb-4 font-weight-bold mt-5">Liste disques: (<?php echo count($data);?>)</h1>
            <div>
                <a href="viewAjout.php" class="btn btn-dark mt-5">Ajouter</a>
            </div>
        </div>
        <div class="row">
            <?php foreach ($data as $disc): ?>
                <div class="col-12 col-sm-6  d-flex my-1">
                    <div class="col-6">
                        <img class="w-100 img-fluid" src="../../assets/fichier/<?=$disc->disc_picture?>" alt="album_pictures">
                    </div>
                    <div class="d-flex col-6 flex-column justify-content-between">
                        <div>
                            <strong><?= $disc->disc_title;?></strong><br>
                            <strong><?= $disc->artist_name;?></strong>
                            <p class="mb-0 small"><strong>label: </strong><?= $disc-> disc_label?></p>
                            <p class="mb-0 small"><strong>year : </strong><?= $disc ->disc_year ?></p>
                            <p class="mb-0 small"><strong>genre : </strong><?= $disc->disc_genre?></p>
                        </div>
                        <div>
                            <a href="<?="viewDetail.php?disc=".$disc->disc_id?>" class="btn btn-primary btn-sm">Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <br>
    </div>
</body>

