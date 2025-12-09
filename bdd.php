<?php
function connexion() {
    return new PDO('mysql:host=localhost;dbname=openclassrooms_p2;charset=utf8', 'root', '');
}