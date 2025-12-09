<?php
    include 'bdd.php';
    include 'header.php';

    $bdd = connexion();
    $oeuvres = $bdd->query('SELECT * FROM oeuvres');
?>
<div id="liste-oeuvres">
    <?php foreach($oeuvres as $oeuvre): ?>
        <article class="oeuvre">
            <a href="oeuvres_det.php?id=<?= $oeuvre['oeuvres_id'] ?>">
                <img src="<?= $oeuvre['image'] ?>" alt="<?= $oeuvre['titre'] ?>">
                <h2><?= $oeuvre['titre'] ?></h2>
                <p class="description"><?= $oeuvre['artiste'] ?></p>
            </a>
        </article>

        
    <?php endforeach; ?>
</div>
<?php require 'footer.php'; ?>
