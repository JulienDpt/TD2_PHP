<?php
include 'utils.inc.php';
start_page('data-processing');

$action = $_POST['action'];
if ($action = 'mailer')
{
    $id = $_POST['id'];
    $sexe = $_POST['sexe'];
    $mail = $_POST['mail'];
    $maildest = $_POST['maildest'];
    $pwd = $_POST['pwd'];
    $verifPwd = $_POST['verifPwd'];
    $phone = $_POST['phone'];
    $action = $_POST['action'];


    $message = 'Voici vos identifiants d\'inscription : ' . PHP_EOL.$id . '<br/>';
    $message .= 'Email : ' . $mail . PHP_EOL . '<br/>';
    $message .= 'Mot de passe : ' . PHP_EOL . $pwd . '<br/>';
    echo $message;
}

elseif($action == 'rec')
{
    $id = $_POST['id'];
    $sexe = $_POST['sexe'];
    $mail = $_POST['mail'];
    $maildest = $_POST['maildest'];
    $pwd = $_POST['pwd'];
    $verifPwd = $_POST['verifPwd'];
    $phone = $_POST['phone'];
    $action = $_POST['action'];

    $file= 'data.txt';
    if(!($file = fopen($file, 'a+')))
    {
        echo 'Erreur d\'ouverture';
        exit();
    }

    fputs($file, 'id : ' . $id . ', email : ' . $mail . PHP_EOL);
    fclose($file);
}

else
    echo '<br/><strong>Bouton non géré ! </strong><br/>';

if (mail ($maildest,'test', $message))
    echo 'Mail correctement envoyé';
else
    echo 'Mail non envoyé';

$dbLink = mysqli_connect('mysql-juliendpt.alwaysdata.net', 'juliendpt', 'sugararvor280900')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

mysqli_select_db($dbLink , 'juliendpt_td2')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

$today = date('Y.m.d');
$query = 'INSERT INTO user (id, sexe, mail, pwd, date)';
$query .= 'VALUES (\'' . $id . '\', \''. $sexe . '\', \'' . $mail . '\', \'' . $pwd . '\', \''. $today . '\')';

if(!($dbResult = mysqli_query($dbLink, $query)))
{
    echo 'Erreur de requête<br/>';
    // Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
    // Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}
else
    {
        echo 'Votre inscription (' . $id . ') a été enregistrée, merci' .PHP_EOL;
    }


?>