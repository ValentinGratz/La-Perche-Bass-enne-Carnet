<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>La Perche Basséenne v1.0 Build 5 - Suivi</title>

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
                    <h1 class="page-header">Suivi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
			<!-- TABLEAU -->




			<center>
			Choix de la date : <select value="suivi">
				<option value="29/05/2018">29/05/2018</option>
			</select>
			</center>
			
			<br />
			<br />
			
<div class="WordSection1">

<table class="MsoTableGrid" style="margin-left:100pt;border-collapse:collapse;border:none;mso-yfti-tbllook:
 1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;mso-border-insideh:none;mso-border-insidev:
 none" cellspacing="0" cellpadding="0" border="0">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes">
  <td style="width:162.6pt;padding:0cm 5.4pt 0cm 5.4pt" width="217" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">Date&nbsp;: 
<!--- ouverture de la base --->
  <?php
   /* echo $date;*/
	?>
<!--- FIN ---> (résultat de la requete)
</p>
  </td>
  <td style="width:233.9pt;padding:0cm 5.4pt 0cm 5.4pt" width="312" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">Lieu&nbsp;:  (résultat de la requete)
  </td>
  <td style="width:7.0cm;padding:0cm 5.4pt 0cm 5.4pt" width="265" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">Durée&nbsp;: (Résultat requête)</p>
  </td>
 </tr>
</tbody></table>

<p class="MsoNormal" style="margin-left:100pt"><o:p>&nbsp;</o:p></p>

<table class="MsoTableGrid" style="margin-left:100pt;border-collapse:collapse;border:none;mso-yfti-tbllook:
 1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;mso-border-insideh:none;mso-border-insidev:
 none" cellspacing="0" cellpadding="0" border="0">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes">
  <td style="width:162.6pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt" width="217" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal" align="center"><b style="mso-bidi-font-weight:normal">Météo<o:p></o:p></b></p>
  </td>
  <td style="width:21.6pt;padding:0cm 5.4pt 0cm 5.4pt" width="29" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal"><o:p>&nbsp;</o:p></p>
  </td>
  <td style="width:212.3pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt" width="283" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal" align="center"><b style="mso-bidi-font-weight:normal">L’eau<o:p></o:p></b></p>
  </td>
  <td style="width:21.25pt;padding:0cm 5.4pt 0cm 5.4pt" width="28" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal"><o:p>&nbsp;</o:p></p>
  </td>
  <td style="width:1pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt" width="236" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal" align="center"><b style="mso-bidi-font-weight:normal">Le
  fond<o:p></o:p></b></p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal" align="center"><b style="mso-bidi-font-weight:normal"><o:p>&nbsp;</o:p></b></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1;mso-yfti-lastrow:yes">
  <td style="width:162.6pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt" width="217" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">Temps&nbsp;:</p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal"><o:p>&nbsp;</o:p></p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">Direction du vent&nbsp;:</p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)<o:p></o:p></p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal"><o:p>&nbsp;</o:p></p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">Force du vent&nbsp;: </p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)<o:p></o:p></p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal"><o:p>&nbsp;</o:p></p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">Phase lunaire&nbsp;:</p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
  <td style="width:21.6pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt" width="29" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal"><o:p>&nbsp;</o:p></p>
  </td>
  <td style="width:212.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt" width="283" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">Type (canal, étang, rivière…)</p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)<o:p></o:p></p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal"><o:p>&nbsp;</o:p></p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">Couleur de l’eau</p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)<o:p></o:p></p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal"><o:p>&nbsp;</o:p></p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">Force du courant</p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)<o:p></o:p></p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal"><o:p>&nbsp;</o:p></p>
  </td>
  <td style="width:21.25pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt" width="28" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal"><o:p>&nbsp;</o:p></p>
  </td>
  <td style="width:177.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt" width="236" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">Type de fond&nbsp;:</p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)<o:p></o:p></p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal"><o:p>&nbsp;</o:p></p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">Végétation</p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)<o:p></o:p></p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal"><o:p>&nbsp;</o:p></p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">Profondeur </p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)<o:p></o:p></p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal"><o:p>&nbsp;</o:p></p>
  </td>
 </tr>
</tbody></table>

<p class="MsoNormal" style="margin-left:100pt"><o:p>&nbsp;</o:p></p>

<table class="MsoTableGrid" style="margin-left:100pt;border-collapse:collapse;border:none;mso-yfti-tbllook:
 1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;mso-border-insideh:none;mso-border-insidev:
 none" cellspacing="0" cellpadding="0" border="0">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes">
  <td style="width:21.6pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt" width="377" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal" align="center"><b style="mso-bidi-font-weight:normal">Composition
  de l’Amorce<o:p></o:p></b></p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal" align="center"><b style="mso-bidi-font-weight:normal"><o:p>&nbsp;</o:p></b></p>
  </td>
  <td style="width:23.95pt;padding:0cm 5.4pt 0cm 5.4pt" width="32" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal"><o:p>&nbsp;</o:p></p>
  </td>
  <td style="width:287.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt" width="384" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal" align="center"><b style="mso-bidi-font-weight:normal">Matériel
  et lignes<o:p></o:p></b></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1;mso-yfti-lastrow:yes">
  <td style="width:283.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt" width="377" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
  <td style="width:23.95pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt" width="32" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal"><o:p>&nbsp;</o:p></p>
  </td>
  <td style="width:287.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt" width="384" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
 </tr>
</tbody></table>

<p class="MsoNormal" style="margin-left:155.95pt"><o:p>&nbsp;</o:p></p>

<table class="MsoTable15Plain1" style="margin-left:100pt;border-collapse:collapse;border:none;mso-border-alt:
 solid #BFBFBF .5pt;mso-border-themecolor:background1;mso-border-themeshade:
 191;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt" cellspacing="0" cellpadding="0" border="1">
 <tbody><tr style="mso-yfti-irow:-1;mso-yfti-firstrow:yes;mso-yfti-lastfirstrow:yes;
  height:36.5pt">
  <td colspan="5" style="width:594.95pt;border:solid #BFBFBF 1.0pt;
  mso-border-themecolor:background1;mso-border-themeshade:191;mso-border-alt:
  solid #BFBFBF .5pt;mso-border-themecolor:background1;mso-border-themeshade:
  191;padding:0cm 5.4pt 0cm 5.4pt;height:36.5pt" width="793">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-yfti-cnfc:5" align="center"><b><span style="font-size:22.0pt;mso-bidi-font-size:11.0pt">Prises</span><o:p></o:p></b></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:0">
  <td style="width:70.45pt;border:solid #BFBFBF 1.0pt;
  mso-border-themecolor:background1;mso-border-themeshade:191;border-top:none;
  mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
  mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="94" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-yfti-cnfc:68" align="center"><span style="mso-bidi-font-weight:bold">Nombre<o:p></o:p></span></p>
  </td>
  <td style="width:233.9pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="312" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-yfti-cnfc:64" align="center"><b style="mso-bidi-font-weight:
  normal">Espèce<o:p></o:p></b></p>
  </td>
  <td style="width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="66" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-yfti-cnfc:64" align="center"><b style="mso-bidi-font-weight:
  normal">Taille<o:p></o:p></b></p>
  </td>
  <td style="width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="85" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-yfti-cnfc:64" align="center"><b style="mso-bidi-font-weight:
  normal">Poids<o:p></o:p></b></p>
  </td>
  <td style="width:177.2pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="236" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-yfti-cnfc:64" align="center"><b style="mso-bidi-font-weight:
  normal">Appât<o:p></o:p></b></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1">
  <td style="width:70.45pt;border:solid #BFBFBF 1.0pt;
  mso-border-themecolor:background1;mso-border-themeshade:191;border-top:none;
  mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
  mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="94" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:4"><span style="mso-bidi-font-weight:bold">(Résultat
  requête)<o:p></o:p></span></p>
  </td>
  <td style="width:233.9pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="312" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
  <td style="width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="66" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
  <td style="width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="85" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
  <td style="width:177.2pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="236" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:2">
  <td style="width:70.45pt;border:solid #BFBFBF 1.0pt;
  mso-border-themecolor:background1;mso-border-themeshade:191;border-top:none;
  mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
  mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="94" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:68"><span style="mso-bidi-font-weight:bold">(Résultat
  requête)<b><o:p></o:p></b></span></p>
  </td>
  <td style="width:233.9pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="312" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:64">(Résultat requête)</p>
  </td>
  <td style="width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="66" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:64">(Résultat requête)</p>
  </td>
  <td style="width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="85" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:64">(Résultat requête)</p>
  </td>
  <td style="width:177.2pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="236" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:64">(Résultat requête)</p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:3">
  <td style="width:70.45pt;border:solid #BFBFBF 1.0pt;
  mso-border-themecolor:background1;mso-border-themeshade:191;border-top:none;
  mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
  mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="94" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:4"><span style="mso-bidi-font-weight:bold">(Résultat
  requête)<b><o:p></o:p></b></span></p>
  </td>
  <td style="width:233.9pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="312" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
  <td style="width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="66" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
  <td style="width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="85" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
  <td style="width:177.2pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="236" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4">
  <td style="width:70.45pt;border:solid #BFBFBF 1.0pt;
  mso-border-themecolor:background1;mso-border-themeshade:191;border-top:none;
  mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
  mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="94" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:68"><span style="mso-bidi-font-weight:bold">(Résultat
  requête)<b><o:p></o:p></b></span></p>
  </td>
  <td style="width:233.9pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="312" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:64">(Résultat requête)</p>
  </td>
  <td style="width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="66" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:64">(Résultat requête)</p>
  </td>
  <td style="width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="85" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:64">(Résultat requête)</p>
  </td>
  <td style="width:177.2pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="236" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:64">(Résultat requête)</p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:5">
  <td style="width:70.45pt;border:solid #BFBFBF 1.0pt;
  mso-border-themecolor:background1;mso-border-themeshade:191;border-top:none;
  mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
  mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="94" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:4"><span style="mso-bidi-font-weight:bold">(Résultat
  requête)<b><o:p></o:p></b></span></p>
  </td>
  <td style="width:233.9pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="312" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
  <td style="width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="66" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
  <td style="width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="85" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
  <td style="width:177.2pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="236" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:6">
  <td style="width:70.45pt;border:solid #BFBFBF 1.0pt;
  mso-border-themecolor:background1;mso-border-themeshade:191;border-top:none;
  mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
  mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="94" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:68"><span style="mso-bidi-font-weight:bold">(Résultat
  requête)<b><o:p></o:p></b></span></p>
  </td>
  <td style="width:233.9pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="312" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:64">(Résultat requête)</p>
  </td>
  <td style="width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="66" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:64">(Résultat requête)</p>
  </td>
  <td style="width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="85" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:64">(Résultat requête)</p>
  </td>
  <td style="width:177.2pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="236" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:64">(Résultat requête)</p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:7">
  <td style="width:70.45pt;border:solid #BFBFBF 1.0pt;
  mso-border-themecolor:background1;mso-border-themeshade:191;border-top:none;
  mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
  mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="94" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:4"><span style="mso-bidi-font-weight:bold">(Résultat
  requête)<o:p></o:p></span></p>
  </td>
  <td style="width:233.9pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="312" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
  <td style="width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="66" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
  <td style="width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="85" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
  <td style="width:177.2pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="236" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:8">
  <td style="width:70.45pt;border:solid #BFBFBF 1.0pt;
  mso-border-themecolor:background1;mso-border-themeshade:191;border-top:none;
  mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
  mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="94" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:68"><span style="mso-bidi-font-weight:bold">(Résultat
  requête)<o:p></o:p></span></p>
  </td>
  <td style="width:233.9pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="312" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:64">(Résultat requête)</p>
  </td>
  <td style="width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="66" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:64">(Résultat requête)</p>
  </td>
  <td style="width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="85" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:64">(Résultat requête)</p>
  </td>
  <td style="width:177.2pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="236" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:64">(Résultat requête)</p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:9">
  <td style="width:70.45pt;border:solid #BFBFBF 1.0pt;
  mso-border-themecolor:background1;mso-border-themeshade:191;border-top:none;
  mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
  mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="94" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:4"><span style="mso-bidi-font-weight:bold">(Résultat
  requête)<o:p></o:p></span></p>
  </td>
  <td style="width:233.9pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="312" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
  <td style="width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="66" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
  <td style="width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="85" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
  <td style="width:177.2pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="236" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:10">
  <td style="width:70.45pt;border:solid #BFBFBF 1.0pt;
  mso-border-themecolor:background1;mso-border-themeshade:191;border-top:none;
  mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
  mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="94" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:68"><span style="mso-bidi-font-weight:bold">(Résultat
  requête)<o:p></o:p></span></p>
  </td>
  <td style="width:233.9pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="312" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:64">(Résultat requête)</p>
  </td>
  <td style="width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="66" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:64">(Résultat requête)</p>
  </td>
  <td style="width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="85" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:64">(Résultat requête)</p>
  </td>
  <td style="width:177.2pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;background:#F2F2F2;mso-background-themecolor:
  background1;mso-background-themeshade:242;padding:0cm 5.4pt 0cm 5.4pt" width="236" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:64">(Résultat requête)</p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:11;mso-yfti-lastrow:yes">
  <td style="width:70.45pt;border:solid #BFBFBF 1.0pt;
  mso-border-themecolor:background1;mso-border-themeshade:191;border-top:none;
  mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
  mso-border-top-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="94" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-yfti-cnfc:4"><span style="mso-bidi-font-weight:bold">(Résultat
  requête)<o:p></o:p></span></p>
  </td>
  <td style="width:233.9pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="312" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
  <td style="width:49.6pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="66" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
  <td style="width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="85" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
  <td style="width:177.2pt;border-top:none;border-left:
  none;border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt" width="236" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  </td>
 </tr>
</tbody></table>

<p class="MsoNormal" style="margin-left:155.95pt"><o:p>&nbsp;</o:p></p>

<table class="MsoTableGrid" style="margin-left:100pt;border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt" cellspacing="0" cellpadding="0" border="1">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes">
  <td style="width:594.95pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt" width="793" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal"><b style="mso-bidi-font-weight:normal">Remarques, anecdotes …<o:p></o:p></b></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1;mso-yfti-lastrow:yes">
  <td style="width:594.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt" width="793" valign="top">
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal">(Résultat requête)</p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal"><o:p>&nbsp;</o:p></p>
  <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal"><o:p>&nbsp;</o:p></p>
  </td>
 </tr>
</tbody></table>

<p class="MsoNormal" style="margin-left:155.95pt"><o:p>&nbsp;</o:p></p>

<p class="MsoNormal" style="margin-left:155.95pt"><o:p>&nbsp;</o:p></p>

</div>





			
			<!-- FIN TABLEAU -->

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
