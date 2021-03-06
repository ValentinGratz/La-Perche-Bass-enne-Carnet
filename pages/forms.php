<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>La Perche Basséenne v1.0 Build 5 - Formulaire</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">La Perche Basséenne</a>
            </div>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Accueil</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-table fa-fw"></i> Formulaire</a>
                        </li>
                        <li>
                            <a href="suivi.html"><i class="fa fa-edit fa-fw"></i> Suivi</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Formulaire</h1>
                </div>
				<div class="col-lg-12">
					<h1>Jour</h1><br/>
							Date : <input type="date">
									Lieu : <input type="text" id="lieu" class="form">
											Durée :<input type="text" id="durée" class="form">
				</div>
                <div class="col-lg-6">
                        <h1>Météo</h1>
                        Temps (soleil, nuages, pluie...)<br />
                            <select value="temps">
                                <option value="soleil">Soleil</li>
                                <option value="nuages">Nuages</li>
                                <option value="pluie">pluie</li>
                                <option value="orageux">orageux</li>
                            </select>
                        <br />
                        <br />
                        Direction du vent<br />
                            <select value="temps">
                                <option value="Nord">Nord</li>
                                <option value="Nord-Est">Nord-Est</li>
                                <option value="Nord-Ouest">Nord-Ouest</li>
                                <option value="Sud">Sud</li>
                                <option value="Sud-Est">Sud-Est</li>
                                <option value="Sud-Ouest">Sud-Ouest</li>
                            </select>
                        <br />
                        <br />
                        Force du vent<br />
                            <select value="temps">
                                <option value="faible">faible</li>
                                <option value="modéré">modéré</li>
                                <option value="fort">fort</li>
                            </select>
                        <br />
                        <br />
                        Phase lunaire<br />
                            <input type="text" id="phase lunaire" class="form-control">
                </div>
                <div class="col-lg-6">
                        <h1>L'eau</h1>
                        Type<br />
                            <select value="type">
                                <option value="canal">canal</li>
                                <option value="étang">étang</li>
                                <option value="rivière">rivière</li>
                            </select>
                        <br />
                        <br />
                        Couleur de l'eau<br />
                            <input type="text" id="couleur de l'eau" class="form-control">
                        <br />
                        <br />
                        Force du courant<br />
                            <input type="text" id="force du courant" class="form-control">
                                            <br />
                <br />
                </div>

                <div class="col-lg-6">
                        <h1>Le fond</h1>
                        Type de fond<br />
                            <select value="type">
                                <option value="vase">vase</li>
                                <option value="gravier">gravier</li>
                            </select>
                            <br /><br />
                            Végétation<br />
                            <input type="text" id="couleur de l'eau" class="form-control"><br />
                            Profondeur<br />
                            <input type="text" id="couleur de l'eau" class="form-control">
                            <br/>
                </div>
                <div class="col-lg-6">
                        <h1>Composition de l'Amorce</h1>
                        <textarea class="composition de l'Amorce" id="composition de l'Amorce"></textarea>
                </div>
                <div class="col-lg-6">
                        <h1>Matériel et lignes</h1>
                        <textarea class="composition de l'Amorce" id="composition de l'Amorce"></textarea>
                </div>
            <br/>
            <br />
            <br />
            <br />
            <div class="col-lg-12">
                <h2>Prises</h2>
                <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Espèce</th>
      <th scope="col">Taille</th>
      <th scope="col">poids</th>
      <th scope="col">Appât</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><input type="number" id="nombre" class="form">
</th>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
  </tr>
    <tr>
      <th scope="row"><input type="number" id="nombre" class="form">
</th>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
  </tr>
        <tr>
    <tr>
      <th scope="row"><input type="number" id="nombre" class="form">
</th>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
  </tr>
    <tr>
      <th scope="row"><input type="number" id="nombre" class="form">
</th>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
  </tr>
    <tr>
      <th scope="row"><input type="number" id="nombre" class="form">
</th>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
  </tr>
    <tr>
      <th scope="row"><input type="number" id="nombre" class="form">
</th>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
  </tr>
    <tr>
      <th scope="row"><input type="number" id="nombre" class="form">
</th>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
  </tr>
    <tr>
      <th scope="row"><input type="number" id="nombre" class="form">
</th>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
  </tr>
    <tr>
      <th scope="row"><input type="number" id="nombre" class="form">
</th>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
  </tr>
    <tr>
      <th scope="row"><input type="number" id="nombre" class="form">
</th>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
  </tr>
    <tr>
      <th scope="row"><input type="number" id="nombre" class="form">
</th>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
      <td><input type="text" id="espece" class="form"></td>
  </tr>
  </tbody>
</table>


                <h2>Remarques, anecdotes ...</h2>
                <textarea class="composition de l'Amorce" id="composition de l'Amorce"></textarea></div>
                <br /> <br /> <br />
				<div style="text-align:center;">
					<button type="button" class="btn-btn-primary col-lg-6">Valider</button>
				</div>
<?php
    try {
        $bdd = new \PDO("sqlite:la_perche_bassenne.sqlite");
		echo "ok";
    } catch(Exception $e) {
        echo "Error BDD : $e->getMessage()";
    }
?>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
