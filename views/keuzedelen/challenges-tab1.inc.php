<?php
// Haal de noodzakelijke bestanden op
require '../config/globalvars.php';
require '../models/Keuzedeel.php'; // Zorg ervoor dat het model ingeladen is

// Haal de data op via het model
$keuzedeels = Keuzedeel::selectAll();

// Verwerk de view (HTML)
require '../views/templates/head.php';
require '../views/templates/keuzedeel.php'; // Hier staat je HTML zoals je hebt laten zien
?>