<?php
require('../config.php');
session_start();
session_unset(); // zruší nastavenie všetkých premenných v sessione
session_destroy(); // Zničí všetky dáta z tohto sessionu

// Presmerovanie na požadovanú stránku
header('Location: ../../index.php');
exit(); // Zabezpečí aby sa nevykonával žiaden ďaľsí kód po presmerovaní
?>
