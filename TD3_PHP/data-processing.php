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
if (mail ($maildest,'test', $message))
    echo 'Mail correctement envoyé';
else
    echo 'Mail non envoyé';

$today = date('Y.m.d');
$query = 'INSERT INTO user (id, sexe, mail, pwd, date)';
$query .= 'VALUES (\'' . $id . '\', \''. $sexe . '\', \'' . $mail . '\', \'' . $pwd . '\', \''. $today . '\')';
?>