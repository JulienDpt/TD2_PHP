<?php
include 'utils.inc.php';
?>

<?php start_page('TD2'); ?>

<html>
<form action="data-processing.php" method="post" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <input type="text" name="id" placeholder="Identifiant">
            <input type="radio" id="male" name="male" value="Homme">
            <label for="male">Homme</label>
            <input type="radio" id="female" name="female" value="Femme">
            <label for="female">Femme</label>
            <input type="text" name="mail" placeholder="E-mail">
            <input type="text" name="maildest" placeholder="Envoyer le mail à">
            <input type="password" name="pwd" placeholder="Mot de passe">
            <input type="password" name="verifPwd" placeholder="Vérifiez le mdp">
            <input type="text" name="phone" placeholder="Téléphone">
            <select id="pays" name="pays">
                <option value="">Selectionner Pays</option>
                <option value="France" name="fr">France</option>
                <option value="Belgique" name="bg">Belgique</option>
                <option value="Monaco" name="mn">Monaco</option>
                <option value="Autre" name="autre">Autre</option>
            </select>
            <input type="checkbox" id="cgu" name="cgu">
            <label for="cgu">Accepter les CGU</label>
            <input name="action" type="submit" value="Mailer">
            <input name="action" type="submit" value="rec">
        </form>
</html>