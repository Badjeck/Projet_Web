<?php

$to = 'gabriel.fougerolle@ynov.com';
 
$message_envoye = "Votre message nous est bien parvenu !";
$message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer SVP.";
$message_erreur_formulaire = "Vous devez d'abord <a href=\"contact.html\">envoyer le formulaire</a>.";
$message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";
 

//formulaire soumis ?
if (!isset($_POST['envoi']))
{
	echo '<p>'.$message_erreur_formulaire.'</p>'."\n";
}
else
{

    $subject = $_POST['objet'];
	$message = $_POST['message'];
	$email = $POST['email'];
	if (($_POST['prenom']) != '')
		{ 
		$nom = $_POST['name'];
		}
	else
	{
		$nom = $_POST['name'].' '.$_POST['prenom'];
	}

    $headers = 'From: '. $nom . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
	
	echo "<p>Message envoyer <a href='index.php'>revenir au cv</a></p>";
}; 
?>