<?php
/**
 * La Perche Basséenne - Configuration
 * Généré automatiquement par install.php
 * NE PAS ÉDITER À LA MAIN
 */

// ============================================
// BASE DE DONNÉES
// ============================================
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'valenti1_carnetperche');

// ============================================
// URL DE BASE (Auto-détection - 100% Portable)
// ============================================
define('BASE_URL', rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\') . '/');
define('BASE_PATH', __DIR__ . DIRECTORY_SEPARATOR);

// ============================================
// CONNEXION PDO
// ============================================
try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => false
        )
    );
} catch(PDOException $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}
?>
