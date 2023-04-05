<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	// Traitement des données du formulaire ici
	// ...

	// Redirection vers la page de confirmation
	header('Location: confirmation.html');
	exit;
}
?>
