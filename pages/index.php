<?php
/**
 * Tableau de Bord - La Perche Basséenne
 * Avec chargement correct de config.php
 */

// Chemin absolu au config
$config_path = dirname(__DIR__) . '/config.php';

// DEBUG: Vérifier que config.php existe
if (!file_exists($config_path)) {
    die('
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Erreur Configuration</title>
    <style>
        body { font-family: Arial; background: #f5f5f5; }
        .container { max-width: 600px; margin: 50px auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #d32f2f; }
        .code { background: #f5f5f5; padding: 10px; border-left: 3px solid #d32f2f; font-family: monospace; margin: 10px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>❌ Erreur : config.php manquant</h1>
        <p>Le fichier de configuration n\'existe pas.</p>
        <p class="code">' . htmlspecialchars($config_path) . '</p>
        <p><strong>Solution :</strong> Vous devez lancer l\'installation.</p>
        <p><a href="../install.php" style="color: #0066cc;">Cliquez ici pour l\'installation</a></p>
    </div>
</body>
</html>
    ');
}

// Charger la configuration
require_once($config_path);

// Vérifier que les constantes sont bien définies
if (!defined('DB_HOST') || !defined('DB_USER') || !defined('DB_PASS') || !defined('DB_NAME')) {
    die('
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Erreur Configuration</title>
    <style>
        body { font-family: Arial; background: #f5f5f5; }
        .container { max-width: 600px; margin: 50px auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #d32f2f; }
    </style>
</head>
<body>
    <div class="container">
        <h1>❌ Erreur : Constantes non définies</h1>
        <p>Le fichier config.php ne définit pas les constantes DB_HOST, DB_USER, DB_PASS, DB_NAME.</p>
        <p><strong>Solution :</strong> Vérifiez que config.php contient les bonnes define().</p>
        <p><a href="../install.php" style="color: #0066cc;">Recommencer l\'installation</a></p>
    </div>
</body>
</html>
    ');
}

// Connexion pour récupérer quelques stats simples pour le dashboard
$total_sorties = 0;
$total_prises = 0;
$derniere_sortie = 'Aucune';

try {
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $total_sorties = $pdo->query("SELECT COUNT(*) FROM sorties")->fetchColumn();
    $total_prises = $pdo->query("SELECT COUNT(*) FROM prises")->fetchColumn();
    $derniere_sortie = $pdo->query("SELECT date_sortie FROM sorties ORDER BY date_sortie DESC LIMIT 1")->fetchColumn();
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    die('
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Erreur Connexion Base de Données</title>
    <style>
        body { font-family: Arial; background: #f5f5f5; }
        .container { max-width: 600px; margin: 50px auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #d32f2f; }
        .code { background: #f5f5f5; padding: 10px; border-left: 3px solid #d32f2f; font-family: monospace; margin: 10px 0; font-size: 12px; }
        .details { background: #fff3cd; padding: 10px; border-radius: 4px; margin: 10px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>❌ Erreur Connexion Base de Données</h1>
        <div class="details">
            <strong>Erreur :</strong>
            <p class="code">' . htmlspecialchars($error_message) . '</p>
        </div>
        <h3>Vérifications :</h3>
        <ul>
            <li>✓ MySQL est-il lancé ? (carré vert dans WAMP)</li>
            <li>✓ Host correct ? (' . DB_HOST . ')</li>
            <li>✓ User correct ? (' . DB_USER . ')</li>
            <li>✓ Password correct ?</li>
            <li>✓ Base de données existe ? (' . DB_NAME . ')</li>
        </ul>
        <p><a href="../install.php" style="color: #0066cc;">Recommencer l\'installation</a></p>
    </div>
</body>
</html>
    ');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Perche Basséenne - Carnet de Pêche</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../vendor/datatables-responsive/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">🎣 La Perche Basséenne</a>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tableau de Bord</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-plus fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $total_sorties; ?></div>
                                    <div>Sorties</div>
                                </div>
                            </div>
                        </div>
                        <a href="forms.php">
                            <div class="panel-footer">
                                <span class="pull-left">Nouvelle sortie</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-check fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $total_prises; ?></div>
                                    <div>Poissons</div>
                                </div>
                            </div>
                        </div>
                        <a href="suivi.php">
                            <div class="panel-footer">
                                <span class="pull-left">Voir les prises</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-calendar fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" style="font-size: 18px;"><?php echo $derniere_sortie ?: 'N/A'; ?></div>
                                    <div>Dernière sortie</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Bienvenue dans La Perche Basséenne!</strong>
                        </div>
                        <div class="panel-body">
                            <p>Votre carnet de pêche en ligne.</p>
                            <ul>
                                <li><a href="forms.php">📝 Ajouter une nouvelle sortie</a></li>
                                <li><a href="suivi.php">📊 Voir vos statistiques</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
