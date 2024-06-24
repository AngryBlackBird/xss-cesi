<?php
// download.php

// Vérifiez si la requête est une requête AJAX
if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') {
    die("Accès non autorisé.");
}
if ($_SERVER['HTTP_HOST'] !== 'localhost') {
    die("Accès non autorisé.");
}

const LOGGING = 'ADMIN';
const PASSWORD = 'ADMIN';
// Définir le contenu du fichier texte
$content = "log : $this->LOGGING.\nmdp :$this->PASSWORD";
// Définir le nom du fichier texte
$fileName = "log.txt";

// En-têtes pour forcer le téléchargement
header('Content-Description: File Transfer');
header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="' . $fileName . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . strlen($content));

// Envoyer le contenu du fichier
echo $content;
exit;