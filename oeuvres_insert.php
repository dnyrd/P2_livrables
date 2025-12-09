<?php
    include 'bdd.php';
    include 'header.php';

if(empty($_POST['titre'])
    || empty($_POST['artiste'])
    || empty($_POST['description'])
    || empty($_POST['image'])) {
    header('Location: ajouter.php?erreur=true');
} else {
    $titre = htmlspecialchars($_POST['titre']);
    $description = htmlspecialchars($_POST['description']);
    $artiste = htmlspecialchars($_POST['artiste']);
    $image = htmlspecialchars($_POST['image']);

// La description doit avoir au moins 3 caractères
    if (strlen(trim($description)) < 3) {
    die("La description doit avoir au moins 3 caractères.");
}

// Le lien image doit commencer par https://
if (strpos($image, 'https://') !== 0) {
    die("L'URL de l'image doit obligatoirement commencer par https://");
}

    $bdd = connexion();
    $requete = $bdd->prepare('INSERT INTO oeuvres (titre, description, artiste, image) VALUES (?, ?, ?, ?)');
    $requete->execute([$titre, $description, $artiste, $image]);

    header('Location: index.php?oeuvres_id=' . $bdd->LastInsertId());
}
?>
<?php require 'footer.php'; ?>