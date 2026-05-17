<?php
/**
 * La Perche Basséenne - Routeur Principal
 * Version 2.0 - Installation WordPress-Style
 * 
 * Logique:
 * 1. Si config.php n'existe pas → Affiche install.php
 * 2. Si config.php existe → Redirige vers pages/index.php
 * 3. Zéro chemin en dur - Portable 100%
 */

// Chemins absolus et portables
$root_dir = __DIR__;
$config_file = $root_dir . DIRECTORY_SEPARATOR . 'config.php';
$install_file = $root_dir . DIRECTORY_SEPARATOR . 'install.php';

// ============================================
// VÉRIFIER L'ÉTAT DE L'INSTALLATION
// ============================================

// Configuration n'existe pas → Afficher l'assistant d'installation
if (!file_exists($config_file)) {
    if (file_exists($install_file)) {
        // Inclure le wizard d'installation
        include $install_file;
        exit();
    } else {
        // Erreur critique
        die('
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Erreur - Fichiers manquants</title>
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
            <li><code>config.php</code> → Non trouvé</li>
            <li><code>install.php</code> → Non trouvé</li>
        </ul>
        <p>Vérifiez que vous avez téléchargé TOUS les fichiers du projet.</p>
        <p class="code">Chemin attendu: ' . htmlspecialchars($root_dir) . '</p>
    </div>
</body>
</html>
        ');
    }
}
// Configuration existe → Rediriger vers l'application
else {
    // Supprimer install.php après installation (sécurité)
    if (file_exists($install_file)) {
        @unlink($install_file);
    }
    
    // Rediriger vers le dashboard
    header('Location: pages/index.php?t=' . time(), true, 301);
    exit();
}
?>
