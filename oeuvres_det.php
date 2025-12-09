<?php
include 'bdd.php';
include 'header.php';

// Vérifier si dans l'URL il y a un ID
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Si pas d’ID, afficher un message et arrêter
if ($id <= 0) {
    echo "ID invalide ou manquant.";
    require 'footer.php';
    exit();
}

// Connexion à la BDD
$bdd = connexion();

// Requête pour récupérer l'oeuvre
$req = $bdd->prepare("SELECT * FROM oeuvres WHERE oeuvres_id = :id");
$req->bindParam(':id', $id, PDO::PARAM_INT);
$req->execute();

$oeuvre = $req->fetch(PDO::FETCH_ASSOC);

// Vérifier si une œuvre a été trouvée
if (!$oeuvre) {
    echo "Aucune œuvre trouvée.";
    require 'footer.php';
    exit();
}
?>

<article id="detail-oeuvre">
    <div id="img-oeuvre">
        <img src="<?= htmlspecialchars($oeuvre['image']) ?>" alt="<?= htmlspecialchars($oeuvre['titre']) ?>">
    </div>

    <div id="contenu-oeuvre">
        <h1><?= htmlspecialchars($oeuvre['titre']) ?></h1>
        <p class="description"><?= htmlspecialchars($oeuvre['artiste']) ?></p>
        <p class="description-complete">
            <?= nl2br(htmlspecialchars($oeuvre['description'])) ?>
        </p>
    </div>
</article>

<?php require 'footer.php'; ?>