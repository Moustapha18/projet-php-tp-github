<?php
include_once 'Database/comptes.php';

$idclient = isset($_GET['idclient']) ? intval($_GET['idclient']) : 0;

// Vérifier si un ID client est passé
if ($idclient > 0) {
    // Récupérer les comptes pour ce client
    $comptes = getComptesByClientId($idclient);
} else {
    $comptes = []; // Si aucun idclient, on initialise $comptes à un tableau vide
}