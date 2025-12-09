<?php require 'header.php'; 

 
?>
<form action="oeuvres_det.php" method="GET">
    <div class="champ-formulaire">
        <label for="ID">ID de l'œuvre à visualiser</label>
        <input type="text" name="id" id="oeuvres_id">
    </div>
    <div class="champ-formulaire">
        <label for="titre">Titre de l'œuvre à visualiser</label>
        <input type="text" name="artiste" id="titre">
    </div>
    <div class="champ-formulaire">
        <label for="auteur">Auteur de l'oeuvre à visualiser</label>
        <input type="text" name="image" id="auteur">
    </div>

    <input type="submit" value="Visualiser" name="submit">
</form>

<?php require 'footer.php'; ?>