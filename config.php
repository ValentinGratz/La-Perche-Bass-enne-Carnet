<?php
/**
 * Configuration Base de Données
 * À ADAPTER AVEC VOS IDENTIFIANTS
 */

$db_host = 'localhost';
$db_user = 'root';        // À MODIFIER
$db_password = '';        // À MODIFIER
$db_name = 'valenti1_carnetperche';

try {
    $pdo = new PDO(
        "mysql:host=$db_host;dbname=$db_name;charset=utf8mb4",
        $db_user,
        $db_password,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
} catch(PDOException $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}
?>