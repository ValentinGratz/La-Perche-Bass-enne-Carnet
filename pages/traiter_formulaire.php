<?php
require_once('../config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $pdo->beginTransaction();

        // 1. Insérer données du jour
        $stmt_jour = $pdo->prepare("INSERT INTO `Jour` (`Date`, `Lieu`, `Durée`) VALUES (?, ?, ?)");
        $stmt_jour->execute([
            $_POST['date'] ?? null,
            $_POST['lieu'] ?? null,
            $_POST['duree'] ?? null
        ]);
        $jour_id = $pdo->lastInsertId();

        // 2. Insérer données météo
        $stmt_meteo = $pdo->prepare("INSERT INTO `Meteo` (`Temps`, `Direction du vent`, `Force du vent`, `phase lunaire`) VALUES (?, ?, ?, ?)");
        $stmt_meteo->execute([
            $_POST['temps'] ?? null,
            $_POST['direction_vent'] ?? null,
            $_POST['force_vent'] ?? null,
            $_POST['phase_lunaire'] ?? null
        ]);

        // 3. Insérer données de l'eau
        $stmt_eau = $pdo->prepare("INSERT INTO `l'eau` (`Type`, `couleur de l'eau`, `Force du courant`) VALUES (?, ?, ?)");
        $stmt_eau->execute([
            $_POST['type_eau'] ?? null,
            $_POST['couleur_eau'] ?? null,
            $_POST['force_courant'] ?? null
        ]);

        // 4. Insérer données du fond
        $stmt_fond = $pdo->prepare("INSERT INTO `le fond` (`type de fond`, `végétation`, `profondeur`) VALUES (?, ?, ?)");
        $stmt_fond->execute([
            $_POST['type_fond'] ?? null,
            $_POST['vegetation'] ?? null,
            $_POST['profondeur'] ?? null
        ]);

        // 5. Insérer composition de l'amorce
        if (!empty($_POST['amorce'])) {
            $stmt_amorce = $pdo->prepare("INSERT INTO `Composition de l'amorce` (`Composition de l'amorce`) VALUES (?)");
            $stmt_amorce->execute([$_POST['amorce']]);
        }

        // 6. Insérer matériel et lignes
        if (!empty($_POST['materiel'])) {
            $stmt_mat = $pdo->prepare("INSERT INTO `Materiel et lignes` (`Materiel et lignes`) VALUES (?)");
            $stmt_mat->execute([$_POST['materiel']]);
        }

        // 7. Insérer prises (11 lignes possibles)
        $stmt_prise = $pdo->prepare("INSERT INTO `Prises` (`Nombre`, `Espece`, `Taille`, `poids`, `Appât`) VALUES (?, ?, ?, ?, ?)");
        
        for ($i = 1; $i <= 11; $i++) {
            $nombre = $_POST["prise_nombre_$i"] ?? null;
            $espece = $_POST["prise_espece_$i"] ?? null;
            $taille = $_POST["prise_taille_$i"] ?? null;
            $poids = $_POST["prise_poids_$i"] ?? null;
            $appat = $_POST["prise_appat_$i"] ?? null;

            // N'insérer que si au moins un champ est rempli
            if (!empty($nombre) || !empty($espece) || !empty($taille) || !empty($poids) || !empty($appat)) {
                $stmt_prise->execute([
                    $nombre,
                    $espece,
                    $taille,
                    $poids,
                    $appat
                ]);
            }
        }

        // 8. Insérer remarques
        if (!empty($_POST['remarques'])) {
            $stmt_rem = $pdo->prepare("INSERT INTO `Remarques, anecdotes...` (`Remarques, anecdotes...`) VALUES (?)");
            $stmt_rem->execute([$_POST['remarques']]);
        }

        $pdo->commit();
        $_SESSION['message_succes'] = 'Formulaire enregistré avec succès !';
        header('Location: suivi.php');
        exit();

    } catch(Exception $e) {
        $pdo->rollBack();
        $_SESSION['message_erreur'] = 'Erreur lors de l\'enregistrement : ' . $e->getMessage();
        header('Location: forms.php');
        exit();
    }
} else {
    header('Location: forms.php');
    exit();
}
?>