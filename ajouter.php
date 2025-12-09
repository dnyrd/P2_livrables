<?php require 'header.php'; ?>

<form action="oeuvres_insert.php" method="POST">
    <div class="champ-formulaire">
        <label for="titre">Titre de l'œuvre à ajouter</label>
        <input type="text" name="titre" id="titre">
    </div>
    <div class="champ-formulaire">
        <label for="artiste">Auteur de l'œuvre à ajouter</label>
        <input type="text" name="artiste" id="artiste">
    </div>
    <div class="champ-formulaire">
        <label for="image">URL de l'image à ajouter</label>
        <input type="url" name="image" id="image" pattern="https://.*" required>
    </div>
    <div class="champ-formulaire">
        <label for="description">Description à ajouter</label>
        <textarea name="description" id="description"></textarea>
    </div>

    <input type="submit" value="Valider" name="submit">
</form>

<?php require 'footer.php'; ?>
