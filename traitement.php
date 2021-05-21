<?php
if(!empty($_POST['send'])):

    if(empty($_POST['email']) OR empty($_POST['firstname'])):
        die('Les champs email et prénom sont obligatoires');
    else :
        $_POST['name'] = strtoupper($_POST['name']);
    endif;
else :
    die('erreur');
endif;

$reponse= '<p>Félicitations '.ucfirst($_POST['firstname']).' '.strtoupper($_POST['name']).' vous avez à présent tous les avantages abonnés</p>
<p>Vous les recevrez sur votre adresse : '.$_POST['email'].'</p>';
session_start();
$_SESSION['reponse']=$reponse;
header('location: contact.php');



?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement</title>
</head>
<body>
    <p>Félicitations <?php echo ucfirst($_POST['firstname']); ?> <?php echo strtoupper($_POST['name']); ?> vous avez à présent tous les avantages abonnés</p>
    <p>Vous les recevrez sur votre adresse : <?php echo $_POST['email']; ?></p>
</body>
</html>-->