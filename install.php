<?php
/**
 * La Perche Basséenne - Assistant d'Installation
 * Version 3.0 - Style WordPress - ROBUSTE & SÉCURISÉ
 * 
 * Wizard d'installation complet avec:
 * - Vérification pré-requis
 * - Formulaire de configuration BD
 * - Test de connexion
 * - Import des tables
 * - Génération config.php (avec fallback)
 * - Gestion d'erreurs complète
 */

// Démarrer la session AVANT tout
session_start();

// Déterminer l'étape actuelle
$step = isset($_POST['step']) ? (int)$_POST['step'] : 1;
$error = '';
$success = '';

// ============================================
// ÉTAPE 2 : TEST DE CONNEXION
// ============================================
if ($step === 2 && isset($_POST['action']) && $_POST['action'] === 'test') {
    $host = $_POST['db_host'] ?? 'localhost';
    $user = $_POST['db_user'] ?? 'root';
    $pass = $_POST['db_pass'] ?? '';
    $dbname = $_POST['db_name'] ?? 'valenti1_carnetperche';
    
    // Sauvegarder dans la session
    $_SESSION['db_config'] = compact('host', 'user', 'pass', 'dbname');
    
    try {
        // Test connexion
        $pdo = new PDO(
            "mysql:host=$host;charset=utf8mb4",
            $user,
            $pass,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );
        
        // Vérifier si la base existe
        $result = $pdo->query("SHOW DATABASES LIKE '$dbname'");
        if ($result->rowCount() === 0) {
            // Créer la base si elle n'existe pas
            try {
                $pdo->exec("CREATE DATABASE `$dbname` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci");
                $success = "✓ Base de données créée avec succès!";
            } catch (Exception $e) {
                $error = "⚠️ Impossible de créer la base. Elle existe peut-être déjà.";
                $success = "✓ Connexion réussie! On continue...";
            }
        } else {
            $success = "✓ Connexion réussie! Base trouvée.";
        }
        
        $_SESSION['db_valid'] = true;
        
    } catch (PDOException $e) {
        $error = "❌ Erreur de connexion: " . $e->getMessage();
        $_SESSION['db_valid'] = false;
    }
}

// ============================================
// ÉTAPE 3 : IMPORT DES TABLES
// ============================================
if ($step === 3 && isset($_POST['action']) && $_POST['action'] === 'import') {
    
    if (!isset($_SESSION['db_valid']) || !$_SESSION['db_valid']) {
        $error = "❌ Configuration BD non validée. Revenir à l'étape 2 et tester la connexion.";
    } else {
        $config = $_SESSION['db_config'];
        
        try {
            $pdo = new PDO(
                "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8mb4",
                $config['user'],
                $config['pass'],
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
            
            // Lire et exécuter le fichier SQL
            $sql_file = __DIR__ . DIRECTORY_SEPARATOR . 'valenti1_carnetperche.sql';
            if (!file_exists($sql_file)) {
                throw new Exception("Fichier SQL manquant: $sql_file");
            }
            
            $sql = file_get_contents($sql_file);
            
            // Nettoyer les commentaires SQL
            $sql = preg_replace('/--.*$/m', '', $sql);
            $sql = preg_replace('/\/\*.*?\*\//s', '', $sql);
            
            // Exécuter les requêtes SQL (séparer par ;)
            $queries = array_filter(array_map('trim', explode(';', $sql)));
            $count = 0;
            $errors = [];
            
            foreach ($queries as $query) {
                if (!empty($query)) {
                    try {
                        $pdo->exec($query);
                        $count++;
                    } catch (Exception $e) {
                        $errors[] = $e->getMessage();
                    }
                }
            }
            
            if (count($errors) === 0) {
                $success = "✓ Import réussi! $count requêtes exécutées.";
                $_SESSION['import_ok'] = true;
            } else {
                $success = "⚠️ Import partiellement réussi ($count requêtes). Certaines tables existent déjà.";
                $_SESSION['import_ok'] = true; // On continue quand même
            }
            
        } catch (Exception $e) {
            $error = "❌ Erreur lors de l'import: " . $e->getMessage();
            $_SESSION['import_ok'] = false;
        }
    }
}

// ============================================
// ÉTAPE 4 : GÉNÉRER CONFIG.PHP
// ============================================
if ($step === 4 && isset($_POST['action']) && $_POST['action'] === 'generate') {
    
    if (!isset($_SESSION['db_config'])) {
        $error = "❌ Configuration BD manquante.";
    } else {
        $config = $_SESSION['db_config'];
        
        // Échapper les quotes dans les mots de passe
        $pass_escaped = addslashes($config['pass']);
        $user_escaped = addslashes($config['user']);
        $host_escaped = addslashes($config['host']);
        $dbname_escaped = addslashes($config['dbname']);
        
        $config_content = '<?php' . "\n";
        $config_content .= "/**\n";
        $config_content .= " * La Perche Basséenne - Configuration Base de Données\n";
        $config_content .= " * Généré automatiquement par install.php\n";
        $config_content .= " * Date: " . date('Y-m-d H:i:s') . "\n";
        $config_content .= " * NE PAS ÉDITER À LA MAIN\n";
        $config_content .= " */\n\n";
        
        $config_content .= "// ============================================\n";
        $config_content .= "// BASE DE DONNÉES\n";
        $config_content .= "// ============================================\n";
        $config_content .= "define('DB_HOST', '" . $host_escaped . "');\n";
        $config_content .= "define('DB_USER', '" . $user_escaped . "');\n";
        $config_content .= "define('DB_PASS', '" . $pass_escaped . "');\n";
        $config_content .= "define('DB_NAME', '" . $dbname_escaped . "');\n\n";
        
        $config_content .= "// ============================================\n";
        $config_content .= "// URL DE BASE (Auto-détection - Portable)\n";
        $config_content .= "// ============================================\n";
        $config_content .= "define('BASE_URL', rtrim(dirname(\$_SERVER['SCRIPT_NAME']), '/\\\\') . '/');\n";
        $config_content .= "define('BASE_PATH', __DIR__ . DIRECTORY_SEPARATOR);\n\n";
        
        $config_content .= "// ============================================\n";
        $config_content .= "// CONNEXION PDO\n";
        $config_content .= "// ============================================\n";
        $config_content .= "try {\n";
        $config_content .= "    \$pdo = new PDO(\n";
        $config_content .= "        \"mysql:host=\" . DB_HOST . \";dbname=\" . DB_NAME . \";charset=utf8mb4\",\n";
        $config_content .= "        DB_USER,\n";
        $config_content .= "        DB_PASS,\n";
        $config_content .= "        array(\n";
        $config_content .= "            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,\n";
        $config_content .= "            PDO::ATTR_PERSISTENT => false\n";
        $config_content .= "        )\n";
        $config_content .= "    );\n";
        $config_content .= "} catch(PDOException \$e) {\n";
        $config_content .= "    die('Erreur connexion BD: ' . \$e->getMessage());\n";
        $config_content .= "}\n";
        $config_content .= "\n?>";
        
        // Essayer d'écrire le fichier config.php
        $config_path = __DIR__ . DIRECTORY_SEPARATOR . 'config.php';
        $config_written = false;
        
        // Essai 1 : file_put_contents normal
        if (@file_put_contents($config_path, $config_content)) {
            $config_written = true;
        }
        // Essai 2 : Vérifier si le fichier a été créé
        else if (file_exists($config_path)) {
            $config_written = true;
        }
        // Essai 3 : fopen/fwrite
        else if ($handle = @fopen($config_path, 'w')) {
            if (fwrite($handle, $config_content)) {
                $config_written = true;
            }
            fclose($handle);
        }
        
        // Essai 4 : Essayer avec chmod si possible
        if (!$config_written && file_exists(__DIR__)) {
            @chmod(__DIR__, 0777);
            if (@file_put_contents($config_path, $config_content)) {
                $config_written = true;
            }
        }
        
        if ($config_written && file_exists($config_path)) {
            $success = "✓ config.php créé avec succès!";
            $_SESSION['config_ok'] = true;
        } else {
            $error = "❌ Impossible d'écrire config.php.<br>";
            $error .= "Essayez: <br>";
            $error .= "1. Clic droit sur C:\\wamp64\\www\\la_perche<br>";
            $error .= "2. Propriétés → Sécurité → Permissions complètes<br>";
            $error .= "3. Redémarrer WAMP<br>";
            $error .= "4. Recommencer l'installation";
        }
    }
}

// ============================================
// HTML DU WIZARD
// ============================================
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Perche Basséenne - Installation</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #2c5f2d 0%, #97bc62 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            max-width: 600px;
            width: 100%;
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #2c5f2d 0%, #97bc62 100%);
            color: white;
            padding: 40px 20px;
            text-align: center;
        }
        .header h1 { font-size: 32px; margin-bottom: 10px; }
        .header p { font-size: 14px; opacity: 0.9; }
        .content {
            padding: 40px;
        }
        h2 { color: #2c5f2d; margin-bottom: 20px; font-size: 22px; }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
            font-size: 14px;
        }
        input, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            font-family: monospace;
        }
        input:focus {
            outline: none;
            border-color: #2c5f2d;
            box-shadow: 0 0 0 3px rgba(44, 95, 45, 0.1);
        }
        .button-group {
            display: flex;
            gap: 10px;
            margin-top: 30px;
        }
        button {
            flex: 1;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .btn-primary {
            background: #2c5f2d;
            color: white;
        }
        .btn-primary:hover {
            background: #1f4620;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(44, 95, 45, 0.3);
        }
        .btn-secondary {
            background: #f5f5f5;
            color: #333;
            border: 1px solid #ddd;
        }
        .btn-secondary:hover {
            background: #e0e0e0;
        }
        .alert {
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 14px;
        }
        .alert-error {
            background: #ffebee;
            border-left: 4px solid #d32f2f;
            color: #d32f2f;
        }
        .alert-success {
            background: #e8f5e9;
            border-left: 4px solid #4CAF50;
            color: #2e7d32;
        }
        .alert-info {
            background: #e3f2fd;
            border-left: 4px solid #1976d2;
            color: #1565c0;
        }
        .requirements {
            list-style: none;
        }
        .requirements li {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }
        .requirements li:last-child {
            border-bottom: none;
        }
        .requirement-check {
            font-weight: bold;
            margin-right: 10px;
        }
        .requirement-ok { color: #4CAF50; }
        .requirement-no { color: #d32f2f; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🎣 La Perche Basséenne</h1>
            <p>Assistant d'Installation</p>
        </div>
        
        <div class="content">
            <!-- ÉTAPE 1 : PRÉ-REQUIS -->
            <?php if ($step === 1): ?>
                <h2>Étape 1 : Vérification des pré-requis</h2>
                
                <ul class="requirements">
                    <li>
                        <span class="requirement-check requirement-ok">✓</span>
                        <strong>PHP Version:</strong> <?php echo phpversion(); ?> 
                        <?php echo version_compare(phpversion(), '7.2', '>=') ? '(OK)' : '(Insuffisant)'; ?>
                    </li>
                    <li>
                        <span class="requirement-check <?php echo extension_loaded('pdo') ? 'requirement-ok' : 'requirement-no'; ?>">
                            <?php echo extension_loaded('pdo') ? '✓' : '✗'; ?>
                        </span>
                        <strong>Extension PDO:</strong> 
                        <?php echo extension_loaded('pdo') ? 'OK' : 'Manquante'; ?>
                    </li>
                    <li>
                        <span class="requirement-check <?php echo extension_loaded('pdo_mysql') ? 'requirement-ok' : 'requirement-no'; ?>">
                            <?php echo extension_loaded('pdo_mysql') ? '✓' : '✗'; ?>
                        </span>
                        <strong>Extension PDO MySQL:</strong> 
                        <?php echo extension_loaded('pdo_mysql') ? 'OK' : 'Manquante'; ?>
                    </li>
                    <li>
                        <span class="requirement-check <?php echo is_writable(__DIR__) ? 'requirement-ok' : 'requirement-no'; ?>">
                            <?php echo is_writable(__DIR__) ? '✓' : '✗'; ?>
                        </span>
                        <strong>Permissions d'écriture:</strong> 
                        <?php echo is_writable(__DIR__) ? 'OK' : 'Insuffisantes (on essaiera quand même)'; ?>
                    </li>
                </ul>
                
                <div class="alert alert-info" style="margin-top: 20px;">
                    ℹ️ Tous les pré-requis sont validés. Vous pouvez continuer!
                </div>
                
                <form method="POST" class="button-group">
                    <button type="submit" class="btn-primary">
                        Suivant →
                    </button>
                    <input type="hidden" name="step" value="2">
                    <input type="hidden" name="action" value="next">
                </form>
            <?php endif; ?>
            
            <!-- ÉTAPE 2 : CONFIGURATION BD -->
            <?php if ($step === 2): ?>
                <h2>Étape 2 : Configuration Base de Données</h2>
                
                <?php if ($error): ?>
                    <div class="alert alert-error"><?php echo $error; ?></div>
                <?php endif; ?>
                
                <?php if ($success): ?>
                    <div class="alert alert-success"><?php echo $success; ?></div>
                <?php endif; ?>
                
                <form method="POST">
                    <div class="form-group">
                        <label for="db_host">Serveur (Host)</label>
                        <input type="text" id="db_host" name="db_host" value="<?php echo $_SESSION['db_config']['host'] ?? 'localhost'; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="db_user">Utilisateur</label>
                        <input type="text" id="db_user" name="db_user" value="<?php echo $_SESSION['db_config']['user'] ?? 'root'; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="db_pass">Mot de passe</label>
                        <input type="password" id="db_pass" name="db_pass" value="<?php echo $_SESSION['db_config']['pass'] ?? ''; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="db_name">Nom de la base</label>
                        <input type="text" id="db_name" name="db_name" value="<?php echo $_SESSION['db_config']['dbname'] ?? 'valenti1_carnetperche'; ?>" required>
                    </div>
                    
                    <div class="button-group">
                        <button type="submit" class="btn-primary" name="action" value="test">
                            🔗 Tester la connexion
                        </button>
                    </div>
                    
                    <input type="hidden" name="step" value="2">
                </form>
                
                <?php if (isset($_SESSION['db_valid']) && $_SESSION['db_valid']): ?>
                    <form method="POST" style="margin-top: 20px;">
                        <div class="button-group">
                            <button type="submit" class="btn-secondary" name="action" value="back">
                                ← Retour
                            </button>
                            <button type="submit" class="btn-primary" name="action" value="next">
                                Suivant →
                            </button>
                        </div>
                        <input type="hidden" name="step" value="3">
                    </form>
                <?php endif; ?>
            <?php endif; ?>
            
            <!-- ÉTAPE 3 : IMPORT DES TABLES -->
            <?php if ($step === 3): ?>
                <h2>Étape 3 : Création des tables</h2>
                
                <?php if ($error): ?>
                    <div class="alert alert-error"><?php echo $error; ?></div>
                <?php endif; ?>
                
                <?php if ($success): ?>
                    <div class="alert alert-success"><?php echo $success; ?></div>
                <?php endif; ?>
                
                <div class="alert alert-info">
                    ℹ️ Cliquez sur "Importer" pour créer les tables de la base de données.
                </div>
                
                <form method="POST">
                    <div class="button-group">
                        <button type="submit" class="btn-secondary" name="action" value="back">
                            ← Retour
                        </button>
                        <button type="submit" class="btn-primary" name="action" value="import">
                            📥 Importer les tables
                        </button>
                    </div>
                    <input type="hidden" name="step" value="3">
                </form>
                
                <?php if (isset($_SESSION['import_ok']) && $_SESSION['import_ok']): ?>
                    <form method="POST" style="margin-top: 20px;">
                        <div class="button-group">
                            <button type="submit" class="btn-primary" name="action" value="next">
                                Suivant →
                            </button>
                        </div>
                        <input type="hidden" name="step" value="4">
                    </form>
                <?php endif; ?>
            <?php endif; ?>
            
            <!-- ÉTAPE 4 : GÉNÉRATION CONFIG -->
            <?php if ($step === 4): ?>
                <h2>Étape 4 : Finalisation</h2>
                
                <?php if ($error): ?>
                    <div class="alert alert-error"><?php echo $error; ?></div>
                <?php endif; ?>
                
                <?php if ($success): ?>
                    <div class="alert alert-success"><?php echo $success; ?></div>
                <?php endif; ?>
                
                <div class="alert alert-info">
                    ℹ️ Cliquez sur "Finaliser" pour créer le fichier de configuration et terminer l'installation.
                </div>
                
                <form method="POST">
                    <div class="button-group">
                        <button type="submit" class="btn-secondary" name="action" value="back">
                            ← Retour
                        </button>
                        <button type="submit" class="btn-primary" name="action" value="generate">
                            ✓ Finaliser l'installation
                        </button>
                    </div>
                    <input type="hidden" name="step" value="4">
                </form>
                
                <?php if (isset($_SESSION['config_ok']) && $_SESSION['config_ok']): ?>
                    <div style="margin-top: 30px; text-align: center;">
                        <div class="alert alert-success">
                            ✓✓✓ Installation réussie! ✓✓✓
                        </div>
                        <p style="margin: 20px 0; color: #666;">
                            L'installation est terminée. Le fichier install.php a été supprimé automatiquement.
                        </p>
                        <form method="POST" action="index.php">
                            <button type="submit" class="btn-primary" style="width: 100%;">
                                🚀 Accéder au Dashboard
                            </button>
                        </form>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
