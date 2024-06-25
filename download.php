<?php
// download.php

// Vérifie si la requête est une requête AJAX
if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') {
    die("Accès non autorisé.");
}
// Vérifie si la requête provient du même host
if ($_SERVER['HTTP_HOST'] !== 'localhost:8080') {
    die("Accès non autorisé.");
}


include './log.php';
$content = "log : ".LOGGING."\nmdp : ".PASSWORD;
$fileName = "log.txt";


echo $content;
exit;