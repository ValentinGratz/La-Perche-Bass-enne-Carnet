<?php 
/**
 * Suivi des Sorties - La Perche Basséenne
 * Affichage des données avec filtrage correct par date
 */
session_start();
require_once('../config.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Perche Basséenne v1.0 Build 7 - Suivi</title>

    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                    <h1 class="page-header">Suivi des Sorties</h1>
                </div>
            </div>

            <?php if (isset($_SESSION['message_succes'])): ?>
                <div class="alert alert-success alert-dismissible fade in">
                    <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                    <strong>Succès !</strong> <?php echo $_SESSION['message_succes']; unset($_SESSION['message_succes']); ?>
                </div>
            <?php endif; ?>

            <!-- SELECTION DE LA DATE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Sélectionner une sortie</h4>
                </div>
                <div class="panel-body">
                    <form method="GET" class="form-inline">
                        <div class="form-group">
                            <label>Choisir une date :</label>
                            <select name="date" class="form-control" onchange="this.form.submit()">
                                <option value="">-- Toutes les dates --</option>
                                <?php
                                try {
                                    $stmt = $pdo->query("SELECT DISTINCT `Date` FROM `Jour` ORDER BY `Date` DESC");
                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        $selected = (isset($_GET['date']) && $_GET['date'] == $row['Date']) ? 'selected' : '';
                                        echo "<option value='{$row['Date']}' $selected>{$row['Date']}</option>";
                                    }
                                } catch (Exception $e) {
                                    echo "<option>Erreur</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </form>
                </div>
            </div>

            <?php
            // Récupérer les données selon la date sélectionnée
            $date_filter = isset($_GET['date']) && !empty($_GET['date']) ? $_GET['date'] : null;
            $jour = null;

            if ($date_filter) {
                try {
                    $stmt = $pdo->prepare("SELECT * FROM `Jour` WHERE `Date` = ? LIMIT 1");
                    $stmt->execute([$date_filter]);
                    $jour = $stmt->fetch(PDO::FETCH_ASSOC);
                } catch (Exception $e) {
                    echo "<div class='alert alert-danger'>Erreur : " . htmlspecialchars($e->getMessage()) . "</div>";
                }
            }
            
            if ($jour):
            ?>

                <!-- INFORMATIONS GENERALES -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Informations générales</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <strong>Date :</strong> <?php echo date('d/m/Y', strtotime($jour['Date'])); ?><br>
                            </div>
                            <div class="col-lg-4">
                                <strong>Lieu :</strong> <?php echo htmlspecialchars($jour['Lieu'] ?? 'N/A'); ?><br>
                            </div>
                            <div class="col-lg-4">
                                <strong>Durée :</strong> <?php echo htmlspecialchars($jour['Duree'] ?? 'N/A'); ?><br>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- METEO - EAU - FOND -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-info">
                            <div class="panel-heading"><h5>Météo</h5></div>
                            <div class="panel-body">
                                <?php
                                try {
                                    $stmt = $pdo->prepare("SELECT * FROM `Meteo` WHERE `jour_id` = ? LIMIT 1");
                                    $stmt->execute([$jour['id']]);
                                    if ($meteo = $stmt->fetch(PDO::FETCH_ASSOC)):
                                ?>
                                        <strong>Temps :</strong> <?php echo htmlspecialchars($meteo['Temps'] ?? 'N/A'); ?><br>
                                        <strong>Direction du vent :</strong> <?php echo htmlspecialchars($meteo['Direction du vent'] ?? 'N/A'); ?><br>
                                        <strong>Force du vent :</strong> <?php echo htmlspecialchars($meteo['Force du vent'] ?? 'N/A'); ?><br>
                                        <strong>Phase lunaire :</strong> <?php echo htmlspecialchars($meteo['phase lunaire'] ?? 'N/A'); ?><br>
                                    <?php else: ?>
                                        <p>Aucune donnée météo</p>
                                    <?php endif;
                                } catch (Exception $e) {
                                    echo "<p>Erreur : " . htmlspecialchars($e->getMessage()) . "</p>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="panel panel-info">
                            <div class="panel-heading"><h5>L'eau</h5></div>
                            <div class="panel-body">
                                <?php
                                try {
                                    $stmt = $pdo->prepare("SELECT * FROM `l'eau` WHERE `jour_id` = ? LIMIT 1");
                                    $stmt->execute([$jour['id']]);
                                    if ($eau = $stmt->fetch(PDO::FETCH_ASSOC)):
                                ?>
                                        <strong>Type :</strong> <?php echo htmlspecialchars($eau['Type'] ?? 'N/A'); ?><br>
                                        <strong>Couleur :</strong> <?php echo htmlspecialchars($eau['couleur de l\'eau'] ?? 'N/A'); ?><br>
                                        <strong>Force du courant :</strong> <?php echo htmlspecialchars($eau['Force du courant'] ?? 'N/A'); ?><br>
                                    <?php else: ?>
                                        <p>Aucune donnée sur l'eau</p>
                                    <?php endif;
                                } catch (Exception $e) {
                                    echo "<p>Erreur : " . htmlspecialchars($e->getMessage()) . "</p>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="panel panel-info">
                            <div class="panel-heading"><h5>Le fond</h5></div>
                            <div class="panel-body">
                                <?php
                                try {
                                    $stmt = $pdo->prepare("SELECT * FROM `le fond` WHERE `jour_id` = ? LIMIT 1");
                                    $stmt->execute([$jour['id']]);
                                    if ($fond = $stmt->fetch(PDO::FETCH_ASSOC)):
                                ?>
                                        <strong>Type de fond :</strong> <?php echo htmlspecialchars($fond['type de fond'] ?? 'N/A'); ?><br>
                                        <strong>Végétation :</strong> <?php echo htmlspecialchars($fond['végétation'] ?? 'N/A'); ?><br>
                                        <strong>Profondeur :</strong> <?php echo htmlspecialchars($fond['profondeur'] ?? 'N/A'); ?><br>
                                    <?php else: ?>
                                        <p>Aucune donnée sur le fond</p>
                                    <?php endif;
                                } catch (Exception $e) {
                                    echo "<p>Erreur : " . htmlspecialchars($e->getMessage()) . "</p>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- AMORCE ET MATERIEL -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading"><h5>Composition de l'amorce</h5></div>
                            <div class="panel-body">
                                <?php
                                try {
                                    $stmt = $pdo->prepare("SELECT * FROM `Composition de l'amorce` WHERE `jour_id` = ? LIMIT 1");
                                    $stmt->execute([$jour['id']]);
                                    if ($amorce = $stmt->fetch(PDO::FETCH_ASSOC)):
                                        echo nl2br(htmlspecialchars($amorce['Composition de l\'amorce']));
                                    else:
                                        echo '<p>Aucune donnée</p>';
                                    endif;
                                } catch (Exception $e) {
                                    echo "<p>Erreur : " . htmlspecialchars($e->getMessage()) . "</p>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading"><h5>Matériel et lignes</h5></div>
                            <div class="panel-body">
                                <?php
                                try {
                                    $stmt = $pdo->prepare("SELECT * FROM `Materiel et lignes` WHERE `jour_id` = ? LIMIT 1");
                                    $stmt->execute([$jour['id']]);
                                    if ($materiel = $stmt->fetch(PDO::FETCH_ASSOC)):
                                        echo nl2br(htmlspecialchars($materiel['Materiel et lignes']));
                                    else:
                                        echo '<p>Aucune donnée</p>';
                                    endif;
                                } catch (Exception $e) {
                                    echo "<p>Erreur : " . htmlspecialchars($e->getMessage()) . "</p>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PRISES -->
                <div class="panel panel-success">
                    <div class="panel-heading"><h5>Prises</h5></div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr style="background-color: #5cb85c; color: white;">
                                    <th>Nombre</th>
                                    <th>Espèce</th>
                                    <th>Taille</th>
                                    <th>Poids</th>
                                    <th>Appât</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                try {
                                    $stmt = $pdo->prepare("SELECT * FROM `Prises` WHERE `jour_id` = ? ORDER BY id ASC");
                                    $stmt->execute([$jour['id']]);
                                    $prises = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    
                                    if (!empty($prises)):
                                        foreach ($prises as $prise):
                                            echo "<tr>
                                                <td>" . htmlspecialchars($prise['Nombre'] ?? '') . "</td>
                                                <td>" . htmlspecialchars($prise['Espece'] ?? '') . "</td>
                                                <td>" . htmlspecialchars($prise['Taille'] ?? '') . "</td>
                                                <td>" . htmlspecialchars($prise['poids'] ?? '') . "</td>
                                                <td>" . htmlspecialchars($prise['Appât'] ?? '') . "</td>
                                            </tr>";
                                        endforeach;
                                    else:
                                        echo "<tr><td colspan='5' style='text-align:center;'>Aucune prise enregistrée</td></tr>";
                                    endif;
                                } catch (Exception $e) {
                                    echo "<tr><td colspan='5'>Erreur : " . htmlspecialchars($e->getMessage()) . "</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- REMARQUES -->
                <div class="panel panel-default">
                    <div class="panel-heading"><h5>Remarques et anecdotes</h5></div>
                    <div class="panel-body">
                        <?php
                        try {
                            $stmt = $pdo->prepare("SELECT * FROM `Remarques, anecdotes...` WHERE `jour_id` = ? LIMIT 1");
                            $stmt->execute([$jour['id']]);
                            if ($remarque = $stmt->fetch(PDO::FETCH_ASSOC)):
                                echo nl2br(htmlspecialchars($remarque['Remarques, anecdotes...']));
                            else:
                                echo '<p>Aucune remarque</p>';
                            endif;
                        } catch (Exception $e) {
                            echo "<p>Erreur : " . htmlspecialchars($e->getMessage()) . "</p>";
                        }
                        ?>
                    </div>
                </div>

            <?php else: ?>
                <div class="alert alert-info">
                    <strong>Aucune sortie sélectionnée</strong> - Veuillez sélectionner une date ou <a href="forms.php">ajouter une nouvelle sortie</a>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
</body>
</html>
