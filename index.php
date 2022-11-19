<?php

// Appel de la dépendance $_SESSION
require 'lib/Session.php';


// Attraper le param $_GET['page']
if (isset($_GET['page'])) {
    if ($_GET['page'] === 'logout') resetSession();
    else require 'controllers/' . $_GET['page'] . '.php';
}

// Page à afficher
$template = $template ?? 'home';


// Inclusion du template
include 'layout.php';


