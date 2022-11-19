<?php
require_once 'config/pdo.php';
require_once 'models/Vehicules.php';
require_once 'models/VehiculesManager.php';

$template = 'museum';

$vehiculesManager = new VehiculesManager($bddPDO);

$Vehicule = $vehiculesManager->getAll();

