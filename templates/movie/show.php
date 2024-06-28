<?php require_once _ROOTPATH_ . '/templates/header.php'; 
/** @var App\Entity\Movie $movie */

?>

<h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-5 text-center"><?= $movie->getTitle() ?></h1>

<div class="row">
    <div class="col">
        Date de sortie : <?= $movie->getReleaseDate()->format("d/m/y") ?>
    </div>
    <div class="col">
        Durée : <?php if ($movie->getDuration()){
            echo $movie-> getDuration()->format("h\hi");
        } else { echo 'Aucune donnée'; }?>
    </div>
    <div class="col">
        Genre(s) : <?php 
        /** @var App\Entity\Genre $genre */
        foreach ($genres as $genre){ ?>
            <span> <?=$genre->getName();}?>
        
    </div>
    <div class="col">
        Réalisateur(s) : <?php
        /** @var App\Entity\Director $director */
        foreach ($directors as $director){ ?>
            <span> <?=$director->getFirstName(). " " . $director->getLastName();}?>
    </div>
</div>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-4">
        <img src="<?= $movie->getImagePath()?>" class="d-block mx-lg-auto img-fluid" alt="<?= $movie->getTitle() ?>" width="500" height="400" loading="lazy">
      </div>
      <div class="col-lg-8">
        <div>
            <p class="lead"><?= $movie->getSynopsis() ?></p>
        </div>
      </div>
</div>
<?php require_once _ROOTPATH_ . '/templates/footer.php'; ?>