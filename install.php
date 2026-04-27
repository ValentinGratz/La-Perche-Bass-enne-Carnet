<?php
/**
 * Wizard d'Installation - La Perche Basséenne
 * Style WordPress - Configuration complète de la BDD
 */

session_start();

// Vérifier si déjà installé
if (file_exists('config.php')) {
    header('Location: pages/index.php');
    exit();
}

$step = isset($_GET['step']) ? (int)$_GET['step'] : 1;
$error = '';
$success = '';

// Traiter la soumission du formulaire (Étape 3)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $step === 3) {
    $host = $_POST['db_host'] ?? 'localhost';
    $user = $_POST['db_user'] ?? 'root';
    $password = $_POST['db_password'] ?? '';
    $dbname = $_POST['db_name'] ?? 'valenti1_carnetperche';

    try {
        // 1. Connexion sans base de données
        $pdo = new PDO(
            "mysql:host=$host;charset=utf8mb4",
            $user,
            $password,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );

        // 2. Créer la base de données
        $pdo->exec("CREATE DATABASE IF NOT EXISTS `$dbname` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
        $pdo->exec("USE `$dbname`");

        // 3. Lire et exécuter le fichier SQL
        $sql_file = file_get_contents('valenti1_carnetperche.sql');
        
        // Nettoyer le SQL : supprimer les commentaires et les directives phpMyAdmin
        // Supprimer les lignes commençant par -- ou #
        $sql_file = preg_replace('/^\s*--.*$/m', '', $sql_file);
        $sql_file = preg_replace('/^\s*#.*$/m', '', $sql_file);
        
        // Supprimer les commentaires /* ... */
        $sql_file = preg_replace('/\/\*[^*]*\*+(?:[^\/*][^*]*\*+)*\//s', '', $sql_file);
        
        // Supprimer les directives SET et USE (sauf USE pour la base)
        $sql_file = preg_replace('/^SET\s+.*?;$/m', '', $sql_file);
        
        // Exécuter les requêtes SQL nettoyées
        $queries = array_filter(array_map('trim', explode(';', $sql_file)));
        
        foreach ($queries as $query) {
            $query = trim($query);
            if (!empty($query) && strpos(strtoupper($query), 'USE') !== 0) {
                try {
                    $pdo->exec($query);
                } catch (Exception $e) {
                    // Ignorer les erreurs de requêtes vides ou malformées
                    if (strlen($query) > 5) {
                        throw $e;
                    }
                }
            }
        }

        // 4. Générer le fichier config.php
        $config_content = "<?php\n";
        $config_content .= "/**\n";
        $config_content .= " * Configuration Base de Données - La Perche Basséenne\n";
        $config_content .= " * Généré automatiquement par install.php\n";
        $config_content .= " */\n\n";
        $config_content .= "\$db_host = '" . addslashes($host) . "';\n";
        $config_content .= "\$db_user = '" . addslashes($user) . "';\n";
        $config_content .= "\$db_password = '" . addslashes($password) . "';\n";
        $config_content .= "\$db_name = '" . addslashes($dbname) . "';\n\n";
        $config_content .= "try {\n";
        $config_content .= "    \$pdo = new PDO(\n";
        $config_content .= "        \"mysql:host=\$db_host;dbname=\$db_name;charset=utf8mb4\",\n";
        $config_content .= "        \$db_user,\n";
        $config_content .= "        \$db_password,\n";
        $config_content .= "        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)\n";
        $config_content .= "    );\n";
        $config_content .= "} catch(PDOException \$e) {\n";
        $config_content .= "    die('Erreur de connexion : ' . \$e->getMessage());\n";
        $config_content .= "}\n";
        $config_content .= "?>";

        if (file_put_contents('config.php', $config_content)) {
            // 5. Supprimer le fichier install.php après succès
            if (file_exists('install.php')) {
                @unlink('install.php');
            }
            $_SESSION['install_success'] = true;
            header('Location: pages/index.php?installed=1');
            exit();
        } else {
            $error = 'Impossible de créer le fichier config.php. Vérifiez les permissions du dossier.';
        }

    } catch (PDOException $e) {
        $error = 'Erreur BDD : ' . $e->getMessage();
    } catch (Exception $e) {
        $error = 'Erreur : ' . $e->getMessage();
    }
}

// Vérifier les prérequis (Étape 2)
$php_version = phpversion();
$pdo_available = extension_loaded('pdo');
$pdo_mysql = extension_loaded('pdo_mysql');
$writable = is_writable('.');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Installation - La Perche Basséenne</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .installer-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
            padding: 40px;
            animation: slideIn 0.3s ease-out;
        }
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #667eea;
            padding-bottom: 20px;
        }
        .header h1 {
            color: #667eea;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .header p {
            color: #666;
            font-size: 14px;
        }
        .progress-bar {
            background: #667eea;
        }
        .step-indicator {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }
        .step-dot {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: white;
            background: #ddd;
            position: relative;
        }
        .step-dot.active {
            background: #667eea;
        }
        .step-dot.completed {
            background: #28a745;
        }
        .step-content {
            min-height: 250px;
        }
        .check-item {
            display: flex;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #f0f0f0;
        }
        .check-item:last-child {
            border-bottom: none;
        }
        .check-icon {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 18px;
        }
        .check-icon.success {
            background: #d4edda;
            color: #28a745;
        }
        .check-icon.error {
            background: #f8d7da;
            color: #dc3545;
        }
        .check-label {
            flex: 1;
        }
        .check-label strong {
            display: block;
            color: #333;
        }
        .check-label small {
            color: #666;
            display: block;
            margin-top: 3px;
        }
        .form-group label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }
        .form-control {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px 15px;
        }
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        .help-text {
            font-size: 12px;
            color: #666;
            margin-top: 5px;
        }
        .success-icon {
            text-align: center;
            margin-bottom: 30px;
        }
        .success-icon i {
            font-size: 60px;
            color: #28a745;
        }
        .button-group {
            display: flex;
            gap: 10px;
            margin-top: 30px;
            justify-content: space-between;
        }
        .btn {
            border-radius: 5px;
            padding: 10px 20px;
            font-weight: 600;
            cursor: pointer;
            border: none;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }
        .btn-primary {
            background: #667eea;
            color: white;
        }
        .btn-primary:hover {
            background: #764ba2;
            color: white;
            text-decoration: none;
        }
        .btn-secondary {
            background: #e9ecef;
            color: #333;
        }
        .btn-secondary:hover {
            background: #dee2e6;
            color: #333;
            text-decoration: none;
        }
        .alert {
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .welcome-text {
            color: #666;
            line-height: 1.8;
            margin-bottom: 20px;
        }
        .welcome-text strong {
            color: #333;
        }
        .mamp-tips {
            background: #f8f9fa;
            border-left: 4px solid #ffc107;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
        }
        .mamp-tips strong {
            color: #ff9800;
        }
    </style>
</head>
<body>
    <div class="installer-container">
        <div class="header">
            <h1>🎣 La Perche Basséenne</h1>
            <p>Assistant d'Installation</p>
        </div>

        <!-- Indicateur de progression -->
        <div class="step-indicator">
            <div class="step-dot <?php echo ($step >= 1) ? 'active' : ''; ?>">1</div>
            <div class="step-dot <?php echo ($step >= 2) ? 'active' : ''; ?>">2</div>
            <div class="step-dot <?php echo ($step >= 3) ? 'active' : ''; ?>">3</div>
            <div class="step-dot <?php echo ($step >= 4) ? 'completed' : ''; ?>"><i class="fa fa-check"></i></div>
        </div>

        <!-- Barre de progression -->
        <div class="progress" style="height: 5px; margin-bottom: 30px;">
            <div class="progress-bar" style="width: <?php echo ($step / 4) * 100; ?>%"></div>
        </div>

        <!-- ÉTAPE 1: BIENVENUE -->
        <?php if ($step === 1): ?>
            <div class="step-content">
                <h2 style="color: #333; margin-bottom: 20px;">Bienvenue ! 👋</h2>
                <div class="welcome-text">
                    <p><strong>La Perche Basséenne</strong> est une application web pour enregistrer et suivre vos sorties de pêche.</p>
                    <p>Cet assistant va configurer votre base de données MySQL en <strong>quelques secondes</strong>.</p>
                    <p style="margin-bottom: 0;"><strong>Ce qui va être fait :</strong></p>
                </div>
                <ul style="color: #666; margin: 15px 0 25px 0;">
                    <li>✓ Vérifier votre environnement PHP</li>
                    <li>✓ Créer la base de données MySQL</li>
                    <li>✓ Créer les tables nécessaires</li>
                    <li>✓ Générer votre fichier config.php</li>
                    <li>✓ Supprimer automatiquement ce wizard</li>
                </ul>
                <div class="mamp-tips">
                    <strong>💡 Pour MAMP :</strong><br>
                    Assurez-vous que MAMP est démarré (Apache + MySQL)<br>
                    Identifiants par défaut : root / root
                </div>
            </div>
            <div class="button-group">
                <span></span>
                <a href="install.php?step=2" class="btn btn-primary">Suivant →</a>
            </div>
        <?php endif; ?>

        <!-- ÉTAPE 2: VÉRIFICATION -->
        <?php if ($step === 2): ?>
            <div class="step-content">
                <h2 style="color: #333; margin-bottom: 20px;">Vérification de l'environnement</h2>

                <div class="check-item">
                    <div class="check-icon <?php echo version_compare($php_version, '7.2', '>=') ? 'success' : 'error'; ?>">
                        <?php echo version_compare($php_version, '7.2', '>=') ? '✓' : '✗'; ?>
                    </div>
                    <div class="check-label">
                        <strong>Version PHP</strong>
                        <small><?php echo $php_version; ?> (minimum: 7.2)</small>
                    </div>
                </div>

                <div class="check-item">
                    <div class="check-icon <?php echo $pdo_available ? 'success' : 'error'; ?>">
                        <?php echo $pdo_available ? '✓' : '✗'; ?>
                    </div>
                    <div class="check-label">
                        <strong>Extension PDO</strong>
                        <small><?php echo $pdo_available ? 'Activée' : 'Non activée'; ?></small>
                    </div>
                </div>

                <div class="check-item">
                    <div class="check-icon <?php echo $pdo_mysql ? 'success' : 'error'; ?>">
                        <?php echo $pdo_mysql ? '✓' : '✗'; ?>
                    </div>
                    <div class="check-label">
                        <strong>Driver PDO MySQL</strong>
                        <small><?php echo $pdo_mysql ? 'Disponible' : 'Non disponible'; ?></small>
                    </div>
                </div>

                <div class="check-item">
                    <div class="check-icon <?php echo $writable ? 'success' : 'error'; ?>">
                        <?php echo $writable ? '✓' : '✗'; ?>
                    </div>
                    <div class="check-label">
                        <strong>Permissions d'écriture</strong>
                        <small><?php echo $writable ? 'Dossier accessible' : 'Impossible d\'écrire'; ?></small>
                    </div>
                </div>
            </div>

            <div class="button-group">
                <a href="install.php?step=1" class="btn btn-secondary">← Précédent</a>
                <a href="install.php?step=3" class="btn btn-primary <?php echo ($php_version && $pdo_available && $pdo_mysql && $writable) ? '' : 'disabled'; ?>" <?php echo ($php_version && $pdo_available && $pdo_mysql && $writable) ? '' : 'onclick="return false;"'; ?>>Suivant →</a>
            </div>
        <?php endif; ?>

        <!-- ÉTAPE 3: CONFIGURATION BD -->
        <?php if ($step === 3): ?>
            <div class="step-content">
                <h2 style="color: #333; margin-bottom: 20px;">Configuration Base de Données</h2>

                <?php if (!empty($error)): ?>
                    <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
                <?php endif; ?>

                <form method="POST">
                    <div class="form-group">
                        <label for="db_host">Hôte MySQL</label>
                        <input type="text" class="form-control" id="db_host" name="db_host" value="localhost" required>
                        <small class="help-text">Généralement "localhost" (ou 127.0.0.1)</small>
                    </div>

                    <div class="form-group">
                        <label for="db_user">Utilisateur MySQL</label>
                        <input type="text" class="form-control" id="db_user" name="db_user" value="root" required>
                        <small class="help-text">Pour MAMP: "root" | Pour XAMPP: "root" | Pour serveur: votre user</small>
                    </div>

                    <div class="form-group">
                        <label for="db_password">Mot de passe</label>
                        <input type="password" class="form-control" id="db_password" name="db_password" value="root">
                        <small class="help-text">Pour MAMP: "root" | Pour XAMPP: vide | Pour serveur: votre mot de passe</small>
                    </div>

                    <div class="form-group">
                        <label for="db_name">Nom de la base de données</label>
                        <input type="text" class="form-control" id="db_name" name="db_name" value="valenti1_carnetperche" required>
                        <small class="help-text">Sera créée automatiquement si elle n'existe pas</small>
                    </div>

                    <div class="button-group">
                        <a href="install.php?step=2" class="btn btn-secondary">← Précédent</a>
                        <button type="submit" class="btn btn-primary">Installer →</button>
                    </div>
                </form>
            </div>
        <?php endif; ?>

        <!-- ÉTAPE 4: SUCCÈS -->
        <?php if ($step === 4): ?>
            <div class="step-content" style="text-align: center;">
                <div class="success-icon" style="margin: 30px 0;">
                    <span style="font-size: 60px;">✓</span>
                </div>
                <h2 style="color: #28a745; margin-bottom: 20px;">Installation réussie ! 🎉</h2>
                <p style="color: #666; font-size: 16px; margin-bottom: 30px;">
                    Votre base de données a été créée et configurée avec succès.<br>
                    Vous pouvez maintenant utiliser l'application !
                </p>
                <div class="alert alert-success" style="text-align: left;">
                    <strong>✓ Fait :</strong><br>
                    • Base de données créée<br>
                    • Tables importées<br>
                    • config.php généré<br>
                    • install.php supprimé
                </div>
            </div>
            <div class="button-group" style="justify-content: center;">
                <a href="pages/index.php" class="btn btn-primary" style="width: 100%; text-align: center;">Accéder à l'application →</a>
            </div>
        <?php endif; ?>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>