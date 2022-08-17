<?php


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$postnom = $_POST['postnom'];
$sexe = $_POST['sexe'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$prof = $_POST['prof'];
$commun = $_POST['commun'];
$parcel = $_POST['parcel'];

// if ($_POST['valide']) {
$tab = [$nom, $prenom, $postnom, $sexe, $email, $tel, $prof, $commun, $parcel];

for ($i=0; $i < 9; $i++) { 
    file_put_contents('carnet.txt', $tab[$i]."-" , FILE_APPEND);
}
file_put_contents('carnet.txt', '|'.PHP_EOL, FILE_APPEND);
echo 'ok';

if (isset($_POST['nom']) and !empty($_POST['nom']) and isset($_POST['postnom']) and !empty($_POST['postnom']) and isset($_POST['prenom']) and !empty($_POST['prenom']) and isset($_POST['email']) and !empty($_POST['email']) and isset($_POST['sexe']) and !empty($_POST['sexe']) and isset($_POST['tel']) and !empty($_POST['tel']) and isset($_POST['prof']) and !empty($_POST['prof'] and isset($_POST['commun']) and !empty($_POST['commun'])) and isset($_POST['parcel']) and !empty($_POST['parcel']))
{
;

       
    // }
}