<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function isConnected(): bool
{
    return array_key_exists('User', $_SESSION);
}

/**
 * Déstruction de la session (auth)
 *
 * @return void
 */
function resetSession(): void
{
    session_destroy();
    unset($_SESSION['User']);
}

function getLogged()
{
    // il faut utiliser 'self' ou le nom de la classe elle-même, ici 'Session' devant l'opérateur
    return isConnected() ? $_SESSION['User'] : false;
}
