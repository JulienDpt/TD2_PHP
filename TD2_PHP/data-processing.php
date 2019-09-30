<?php
    include 'utils.inc.php';
    start_page('data-processing');

    $action = $_POST['action'];
    if ($action = 'mailer')
    {
        $id = $_POST['id'];
        $male = $_POST['male'];
        $female = $_POST['female'];
        $mail = $_POST['mail'];
        $maildest = $_POST['maildest'];
        $pwd = $_POST['pwd'];
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
    ?>