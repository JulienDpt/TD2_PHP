<?php
    include 'utlis.inc.php';
    start_page('Test-pass');

    $login = $_POST['login'];
    $mdp = $_POST['mdp'];

    $dbLink = mysqli_connect('mysql-juliendpt.alwaysdata.net', 'juliendpt', 'sugararvor280900')
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

    mysqli_select_db($dbLink , 'juliendpt_td2')
    or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $query = 'SELECT * FROM user WHERE $id =';

if(!($dbResult = mysqli_query($dbLink, $query)))
{
    echo 'Erreur de requête<br/>';
    // Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
    // Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}
?>