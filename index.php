<?php
/**
 * Routeur Principal - La Perche Basséenne
 * Version 2.0 - Gestion intelligente Installation/Application
 * 
 * Logique :
 * 1. Si config.php n'existe pas → Affiche install.php
 * 2. Si config.php existe → Supprime install.php et redirige vers l'app
 */

$root_dir = __DIR__;
$config_file = $root_dir . DIRECTORY_SEPARATOR . 'config.php';
$install_file = $root_dir . DIRECTORY_SEPARATOR . 'install.php';

// ============================================
// ÉTAPE 1 : Configuration n'existe pas
// ============================================
if (!file_exists($config_file)) {
    // L'installation n'a jamais été faite
    // Afficher install.php
    if (file_exists($install_file)) {
        include $install_file;
        exit();
    } else {
        // Erreur critique : pas de install.php et pas de config.php
        die('
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Erreur - Installation</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; }
        .container { max-width: 600px; margin: 50px auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #d32f2f; }
        p { line-height: 1.6; color: #666; }
        .code { background: #f5f5f5; padding: 10px; border-left: 3px solid #d32f2f; font-family: monospace; margin: 10px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>❌ Erreur Critique</h1>
        <p><strong>Fichiers manquants :</strong></p>
        <ul>
            <li><code>config.php</code> (configuration) → NON TROUVÉ</li>
            <li><code>install.php</code> (installateur) → NON TROUVÉ</li>
        </ul>
        <p>Pour corriger cela :</p>
        <ol>
            <li>Vérifiez que tous les fichiers du projet ont été téléchargés correctement</li>
            <li>Recherchez le fichier <code>install.php</code> et placez-le à la racine</li>
            <li>Rechargez la page</li>
        </ol>
        <p class="code">Répertoire attendu: ' . htmlspecialchars($root_dir) . '</p>
    </div>
</body>
</html>
        ');
    }
}

// ============================================
// ÉTAPE 2 : Configuration existe
// ============================================
else {
    // Installation terminée avec succès
    // Nettoyer install.php (risque de sécurité)
    if (file_exists($install_file)) {
        @unlink($install_file);
    }
    
    // Rediriger vers l'application
    header('Location: pages/index.php?t=' . time(), true, 301);
    exit();
}
?>
