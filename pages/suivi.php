<?php 
/**
 * Suivi des Sorties - La Perche Basséenne
 * Affichage des données avec filtrage correct par date
 */
require_once(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config.php');

// Récupérer toutes les sorties
$sorties = [];
try {
    $stmt = $pdo->query("SELECT * FROM sorties ORDER BY date_sortie DESC");
    $sorties = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    $error = "Erreur lors du chargement des sorties: " . $e->getMessage();
}

// Récupérer les prises pour chaque sortie
$prises_par_sortie = [];
try {
    foreach ($sorties as $sortie) {
        $stmt = $pdo->prepare("SELECT * FROM prises WHERE sortie_id = :id ORDER BY created_at DESC");
        $stmt->execute([':id' => $sortie['id']]);
        $prises_par_sortie[$sortie['id']] = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
} catch (Exception $e) {
    // Continuer même si erreur
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Perche Basséenne - Suivi</title>

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
                <a class="navbar-brand" href="index.php"><i class="fa fa-anchor"></i> La Perche Basséenne</a>
            </div>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li><a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Tableau de bord</a></li>
                        <li><a href="forms.php"><i class="fa fa-plus-circle fa-fw"></i> Nouvelle sortie</a></li>
                        <li><a href="suivi.php" class="active"><i class="fa fa-table fa-fw"></i> Suivi & Historique</a></li>
                        <li><a href="stats.php"><i class="fa fa-bar-chart fa-fw"></i> Statistiques</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Suivi & Historique</h1>
                </div>
            </div>

            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>

            <?php if (empty($sorties)): ?>
                <div class="alert alert-info">
                    <strong>Aucune sortie enregistrée.</strong>
                    <a href="forms.php" class="btn btn-primary btn-sm">Ajouter une sortie</a>
                </div>
            <?php else: ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>Historique des Sorties</strong>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Lieu</th>
                                                <th>Durée</th>
                                                <th>Météo</th>
                                                <th>Prises</th>
                                                <th>Notes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($sorties as $sortie): ?>
                                                <tr>
                                                    <td>
                                                        <strong><?php echo date('d/m/Y', strtotime($sortie['date_sortie'])); ?></strong>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($sortie['lieu'] ?? 'N/A'); ?></td>
                                                    <td><?php echo htmlspecialchars($sortie['duree'] ?? 'N/A'); ?></td>
                                                    <td><?php echo htmlspecialchars($sortie['meteo'] ?? 'N/A'); ?></td>
                                                    <td>
                                                        <?php 
                                                        $nb_prises = count($prises_par_sortie[$sortie['id']] ?? []);
                                                        echo $nb_prises > 0 ? '<span class="badge badge-success">' . $nb_prises . '</span>' : '<span class="text-muted">Aucune</span>';
                                                        ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars(substr($sortie['notes'] ?? '', 0, 50)); ?></td>
                                                </tr>
                                                
                                                <?php if (!empty($prises_par_sortie[$sortie['id']])): ?>
                                                    <tr style="background: #f9f9f9;">
                                                        <td colspan="6">
                                                            <strong>Prises:</strong>
                                                            <table class="table table-sm" style="margin-bottom: 0;">
                                                                <thead>
                                                                    <tr style="border-top: 1px solid #ddd;">
                                                                        <th>Espèce</th>
                                                                        <th>Poids (kg)</th>
                                                                        <th>Taille (cm)</th>
                                                                        <th>Heure</th>
                                                                        <th>Technique</th>
                                                                        <th>Appât</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($prises_par_sortie[$sortie['id']] as $prise): ?>
                                                                        <tr>
                                                                            <td><?php echo htmlspecialchars($prise['espece']); ?></td>
                                                                            <td><?php echo $prise['poids'] ? number_format($prise['poids'], 2) : 'N/A'; ?></td>
                                                                            <td><?php echo $prise['taille'] ? number_format($prise['taille'], 2) : 'N/A'; ?></td>
                                                                            <td><?php echo $prise['heure_prise'] ?? 'N/A'; ?></td>
                                                                            <td><?php echo htmlspecialchars($prise['technique'] ?? 'N/A'); ?></td>
                                                                            <td><?php echo htmlspecialchars($prise['appat'] ?? 'N/A'); ?></td>
                                                                        </tr>
                                                                    <?php endforeach; ?>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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
