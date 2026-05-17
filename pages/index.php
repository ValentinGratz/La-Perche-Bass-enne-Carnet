<?php
/**
 * Redirection automatique vers install.php si config.php n'existe pas
 */
$config_path = dirname(__DIR__) . '/config.php';

if (!file_exists($config_path)) {
    header('Location: ../install.php');
    exit();
}

// Si config.php existe, charger normalement
require_once($config_path);

// Vérifier que les constantes sont définies
if (!defined('DB_HOST') || !defined('DB_USER') || !defined('DB_PASS') || !defined('DB_NAME')) {
    die('Erreur : constantes de base de données non définies. Vérifiez config.php');
}

// Connexion pour récupérer quelques stats simples pour le dashboard
try {
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $total_sorties = $pdo->query("SELECT COUNT(*) FROM sorties")->fetchColumn();
    $total_prises = $pdo->query("SELECT COUNT(*) FROM prises")->fetchColumn();
    $derniere_sortie = $pdo->query("SELECT date_sortie FROM sorties ORDER BY date_sortie DESC LIMIT 1")->fetchColumn();
} catch (PDOException $e) {
    $total_sorties = $total_prises = 0;
    $derniere_sortie = 'Aucune';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Perche Basséenne - Tableau de bord</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
        .hero-banner {
            background: linear-gradient(135deg, #2c5f2d 0%, #97bc62 100%);
            color: white;
            padding: 30px;
            border-radius: 8px;
            margin-bottom: 30px;
        }
        .hero-banner h2 { margin-top: 0; }
    </style>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><i class="fa fa-anchor"></i> La Perche Basséenne</a>
            </div>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li><a href="index.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Tableau de bord</a></li>
                        <li><a href="forms.php"><i class="fa fa-plus-circle fa-fw"></i> Nouvelle sortie</a></li>
                        <li><a href="suivi.php"><i class="fa fa-table fa-fw"></i> Suivi & Historique</a></li>
                        <li><a href="stats.php"><i class="fa fa-bar-chart fa-fw"></i> Statistiques</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tableau de bord</h1>
                </div>
            </div>

            <!-- Bannière d'accueil -->
            <div class="hero-banner">
                <h2><i class="fa fa-compass"></i> Bienvenue sur ton carnet numérique</h2>
                <p>Enregistre tes sorties pêche, consulte ton historique par date, et analyse tes résultats. Version web locale v1.0 Build 7</p>
            </div>

            <!-- Rappel important -->
            <div class="alert alert-warning">
                <i class="fa fa-info-circle"></i> <strong>Rappel :</strong> Pour la saisie des prises, merci de faire un enregistrement pour chaque prise individuellement.
            </div>

            <!-- Widgets stats -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3"><i class="fa fa-calendar fa-5x"></i></div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $total_sorties; ?></div>
                                    <div>Sorties enregistrées</div>
                                </div>
                            </div>
                        </div>
                        <a href="suivi.php">
                            <div class="panel-footer">
                                <span class="pull-left">Voir l'historique</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3"><i class="fa fa-trophy fa-5x"></i></div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $total_prises; ?></div>
                                    <div>Prises totales</div>
                                </div>
                            </div>
                        </div>
                        <a href="suivi.php">
                            <div class="panel-footer">
                                <span class="pull-left">Voir le détail</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3"><i class="fa fa-clock-o fa-5x"></i></div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" style="font-size: 24px;"><?php echo $derniere_sortie ? date('d/m/Y', strtotime($derniere_sortie)) : 'Aucune'; ?></div>
                                    <div>Dernière sortie</div>
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
            </div>

            <!-- Actions rapides -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><i class="fa fa-bolt fa-fw"></i> Actions rapides</div>
                        <div class="panel-body">
                            <a href="forms.php" class="btn btn-success btn-lg"><i class="fa fa-plus"></i> Enregistrer une sortie</a>
                            <a href="suivi.php" class="btn btn-primary btn-lg"><i class="fa fa-search"></i> Consulter par date</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Changelog repliable -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a data-toggle="collapse" href="#changelog"><i class="fa fa-code-fork fa-fw"></i> Historique des versions</a>
                        </div>
                        <div id="changelog" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h4><strong>v1.7 Stable - 17/05/2026</strong></h4>
                                <p><em>Version finie, stable et utilisable 🎣</em></p>
                                
                                <h5><span style="color: #d32f2f;">🐛 Fix</span></h5>
                                <ul>
                                    <li>Corrections critiques du système d'installation</li>
                                    <li>Correction chemin Windows/Linux avec <code>DIRECTORY_SEPARATOR</code></li>
                                </ul>
                                
                                <h5><span style="color: #4CAF50;">✨ Feature</span></h5>
                                <ul>
                                    <li>Wizard d'installation type WordPress</li>
                                </ul>
                                
                                <h5><span style="color: #2196F3;">🗄 Improvement</span></h5>
                                <ul>
                                    <li>BDD restructurée avec clés étrangères</li>
                                    <li>Affichage des données filtrées correctement par date</li>
                                    <li>Gestion sécurisée des identifiants MAMP</li>
                                </ul>
                                
                                <hr>
                                
                                <h5><strong>v1.0 Build 7</strong></h5>
                                <ul>
                                    <li>Changement de format BDD, au format SQL</li>
                                    <li>Correction de connexion à l'aide de Copilot</li>
                                </ul>
                                
                                <h5><strong>v1.0 Build 6</strong></h5>
                                <ul>
                                    <li>Modification de nom de deux champs du formulaire</li>
                                </ul>
                                
                                <h5><strong>v1.0 Build 5</strong></h5>
                                <ul>
                                    <li>Modification du titre des pages + guide d'utilisation rédigé</li>
                                </ul>
                                
                                <h5><strong>v1.0 Build 4</strong></h5>
                                <ul>
                                    <li>Page formulaire, suivi mises en forme, refonte de la bdd en sqlite</li>
                                </ul>
                                
                                <h5><strong>v1.0 Build 1</strong></h5>
                                <ul>
                                    <li>Version web partie html réalisée uniquement</li>
                                </ul>
                                
                                <h5><strong>v1.0</strong></h5>
                                <ul>
                                    <li>Version web en local</li>
                                </ul>
                                
                                <h5><strong>v0.2</strong></h5>
                                <ul>
                                    <li>Fichier sous LibreOffice Base de données : impossible à l'ouvrir</li>
                                </ul>
                                
                                <h5><strong>v0.1</strong></h5>
                                <ul>
                                    <li>Fichier sous Access : problème de saisie du formulaire</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>
</body>
</html>
