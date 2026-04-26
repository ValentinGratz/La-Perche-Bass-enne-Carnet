<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Perche Basséenne v1.0 Build 7 - Formulaire</title>

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
                    <h1 class="page-header">Formulaire de Saisie</h1>
                </div>
            </div>

            <?php if (isset($_SESSION['message_succes'])): ?>
                <div class="alert alert-success alert-dismissible fade in">
                    <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                    <strong>Succès !</strong> <?php echo $_SESSION['message_succes']; unset($_SESSION['message_succes']); ?>
                </div>
            <?php endif; ?>

            <?php if (isset($_SESSION['message_erreur'])): ?>
                <div class="alert alert-danger alert-dismissible fade in">
                    <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                    <strong>Erreur !</strong> <?php echo $_SESSION['message_erreur']; unset($_SESSION['message_erreur']); ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="traiter_formulaire.php">
                <!-- JOUR -->
                <div class="col-lg-12">
                    <h3>Jour</h3><br/>
                    <div class="form-group">
                        <label>Date :</label>
                        <input type="date" name="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Lieu :</label>
                        <input type="text" name="lieu" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Durée :</label>
                        <input type="text" name="duree" class="form-control" placeholder="ex: 3h ou 14h-17h">
                    </div>
                </div>

                <!-- METEO -->
                <div class="col-lg-6">
                    <h3>Météo</h3>
                    <div class="form-group">
                        <label>Temps :</label>
                        <select name="temps" class="form-control">
                            <option value="">-- Sélectionner --</option>
                            <option value="soleil">Soleil</option>
                            <option value="nuages">Nuages</option>
                            <option value="pluie">Pluie</option>
                            <option value="orageux">Orageux</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Direction du vent :</label>
                        <select name="direction_vent" class="form-control">
                            <option value="">-- Sélectionner --</option>
                            <option value="Nord">Nord</option>
                            <option value="Nord-Est">Nord-Est</option>
                            <option value="Nord-Ouest">Nord-Ouest</option>
                            <option value="Sud">Sud</option>
                            <option value="Sud-Est">Sud-Est</option>
                            <option value="Sud-Ouest">Sud-Ouest</option>
                            <option value="Est">Est</option>
                            <option value="Ouest">Ouest</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Force du vent :</label>
                        <select name="force_vent" class="form-control">
                            <option value="">-- Sélectionner --</option>
                            <option value="faible">Faible</option>
                            <option value="modere">Modéré</option>
                            <option value="fort">Fort</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Phase lunaire :</label>
                        <input type="text" name="phase_lunaire" class="form-control" placeholder="ex: Nouvelle lune">
                    </div>
                </div>

                <!-- L'EAU -->
                <div class="col-lg-6">
                    <h3>L'eau</h3>
                    <div class="form-group">
                        <label>Type :</label>
                        <select name="type_eau" class="form-control">
                            <option value="">-- Sélectionner --</option>
                            <option value="canal">Canal</option>
                            <option value="etang">Étang</option>
                            <option value="riviere">Rivière</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Couleur de l'eau :</label>
                        <input type="text" name="couleur_eau" class="form-control" placeholder="ex: Marron clair">
                    </div>
                    <div class="form-group">
                        <label>Force du courant :</label>
                        <input type="text" name="force_courant" class="form-control" placeholder="ex: Faible">
                    </div>
                </div>

                <!-- LE FOND -->
                <div class="col-lg-6">
                    <h3>Le fond</h3>
                    <div class="form-group">
                        <label>Type de fond :</label>
                        <select name="type_fond" class="form-control">
                            <option value="">-- Sélectionner --</option>
                            <option value="vase">Vase</option>
                            <option value="gravier">Gravier</option>
                            <option value="sable">Sable</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Végétation :</label>
                        <input type="text" name="vegetation" class="form-control" placeholder="ex: Algues">
                    </div>
                    <div class="form-group">
                        <label>Profondeur :</label>
                        <input type="text" name="profondeur" class="form-control" placeholder="ex: 2m">
                    </div>
                </div>

                <!-- COMPOSITION DE L'AMORCE -->
                <div class="col-lg-6">
                    <h3>Composition de l'Amorce</h3>
                    <div class="form-group">
                        <textarea name="amorce" class="form-control" rows="5" placeholder="Une ligne par ingrédient"></textarea>
                    </div>
                </div>

                <!-- MATERIEL ET LIGNES -->
                <div class="col-lg-6">
                    <h3>Matériel et lignes</h3>
                    <div class="form-group">
                        <textarea name="materiel" class="form-control" rows="5" placeholder="Une ligne par élément"></textarea>
                    </div>
                </div>

                <!-- PRISES -->
                <div class="col-lg-12">
                    <h3>Prises</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Espèce</th>
                                <th>Taille</th>
                                <th>Poids</th>
                                <th>Appât</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i <= 11; $i++): ?>
                                <tr>
                                    <td><input type="number" name="prise_nombre_<?php echo $i; ?>" class="form-control"></td>
                                    <td><input type="text" name="prise_espece_<?php echo $i; ?>" class="form-control" placeholder="ex: Carpe"></td>
                                    <td><input type="text" name="prise_taille_<?php echo $i; ?>" class="form-control" placeholder="cm"></td>
                                    <td><input type="text" name="prise_poids_<?php echo $i; ?>" class="form-control" placeholder="kg"></td>
                                    <td><input type="text" name="prise_appat_<?php echo $i; ?>" class="form-control" placeholder="ex: Maïs"></td>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>

                <!-- REMARQUES -->
                <div class="col-lg-12">
                    <h3>Remarques, anecdotes ...</h3>
                    <div class="form-group">
                        <textarea name="remarques" class="form-control" rows="5" placeholder="Vos observations du jour"></textarea>
                    </div>
                </div>

                <!-- BOUTON VALIDATION -->
                <div class="col-lg-12" style="text-align:center; margin-bottom: 20px;">
                    <button type="submit" class="btn btn-primary btn-lg">Valider le formulaire</button>
                </div>
            </form>
        </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
</body>
</html>