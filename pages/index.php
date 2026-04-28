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
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Perche Basséenne v1.0 Build 7 - Accueil</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                <a class="navbar-brand" href="index.php">La Perche Basséenne</a>
            </div>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </li>
                        <li><a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Accueil</a></li>
                        <li><a href="forms.php"><i class="fa fa-table fa-fw"></i> Formulaire</a></li>
                        <li><a href="suivi.php"><i class="fa fa-edit fa-fw"></i> Suivi</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Accueil</h1>
                </div>
            </div>
            <h2>Bienvenue sur la version web/local du carnet "La Perche Basséenne"</h2><br />
            <div class="p-5 mb-5 bg-danger text-white">Pour la saisie des prises, merci de faire un enregistrement pour chaque prise.</div>
            <h3>CHANGELOG :</h3>
            <br />
            <ul>
                <li>v0.1 : Fichier sous Access : problème de saisie du formulaire</li>
                <li>v0.2 : Fichier sous LibreOffice Base de données : impossible à l'ouvrir</li>
                <li>v1.0 : Version web en local</li>
                <li>v1.0 Build 1 : Version web, partie html réalisée uniquement</li>
                <li>v1.0 Build 4 : page formulaire, suivi mises en forme, refonte de la bdd en sqlite</li>
                <li>v1.0 Build 5 : Modification du titre des pages + guide d'utilisation rédigé</li>
                <li>v1.0 Build 7 : changement de format BDD, au format SQL + intégration PHP complète</li>
            </ul>
            <h2>Guide d'utilisation :</h2>
            <p>En premier lieu, merci de ne pas modifier directement les fichiers.</p>
            <table>
                <tr>
                    <td><img src="img/menu.png"></td>
                    <td><p>Pour accéder aux pages de saisie et de consultation, veuillez aller dans le menu de gauche. </p></td>
                </tr>
            </table>
            <h4>Le formulaire</h4>
            <table>
                <tr>
                    <td><img src="img/jour.png"></td>
                    <td>La date est saisie au format automatique.<br />
                    Pour la durée, merci de mettre directement soit le nombre d'heures ou la plage horaire. </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td><img src="img/meteo.png"></td>
                    <td>Vous devez sélectionner dans le menu déroulante, sauf pour la phase lunaire que vous devez indiquer manuellement. </td>
                </tr>
            </table><br />
            <table>
                <tr>
                    <td><img src="img/l'eau.png"></td>
                    <td>Étant donné que pour la couleur et la force, il est impossible de faire en menu déroulante, merci de bien indiquer ces deux lignes. </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td><img src="img/composition de l'amorce _ materiel et lignes.png"></td>
                    <td>Il est possible de saisir en liste (à la ligne), pour agrandir le champs, merci de cliquer sur le coin droit et de le tirer.</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td><img src="img/prises.png"></td>
                </tr>
            </table>
            <p>Pour les prises, le formuaire n'a pas encore testé pour les 11 prises, donc, merci de saisir le formulaire par prise. </p>
            <table>
                <tr>
                    <td><img src="img/remarques.png"></td>
                    <td>Il est possible de saisir en liste (à la ligne), pour agrandir le champs, merci de cliquer sur le coin droit et de le tirer.</td>
                </tr>
            </table>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>
</body>
</html>