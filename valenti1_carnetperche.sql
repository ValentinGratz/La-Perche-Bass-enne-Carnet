-- ============================================================
-- La Perche Basséenne - Base de Données
-- Version optimisée avec types de données corrects
-- ============================================================

SET NAMES utf8mb4;
SET CHARACTER SET utf8mb4;

-- ============================================================
-- TABLE JOUR (Sortie de pêche)
-- ============================================================
CREATE TABLE IF NOT EXISTS `Jour` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `Date` DATE NOT NULL UNIQUE,
  `Lieu` VARCHAR(255),
  `Duree` VARCHAR(100),
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE METEO
-- ============================================================
CREATE TABLE IF NOT EXISTS `Meteo` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `jour_id` INT NOT NULL,
  `Temps` VARCHAR(100),
  `Direction du vent` VARCHAR(50),
  `Force du vent` VARCHAR(50),
  `phase lunaire` VARCHAR(100),
  FOREIGN KEY (`jour_id`) REFERENCES `Jour`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE L'EAU
-- ============================================================
CREATE TABLE IF NOT EXISTS `l'eau` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `jour_id` INT NOT NULL,
  `Type` VARCHAR(100),
  `couleur de l'eau` VARCHAR(100),
  `Force du courant` VARCHAR(100),
  FOREIGN KEY (`jour_id`) REFERENCES `Jour`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE LE FOND
-- ============================================================
CREATE TABLE IF NOT EXISTS `le fond` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `jour_id` INT NOT NULL,
  `type de fond` VARCHAR(100),
  `végétation` TEXT,
  `profondeur` VARCHAR(100),
  FOREIGN KEY (`jour_id`) REFERENCES `Jour`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE AMORCE
-- ============================================================
CREATE TABLE IF NOT EXISTS `Composition de l'amorce` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `jour_id` INT NOT NULL,
  `Composition de l'amorce` LONGTEXT,
  FOREIGN KEY (`jour_id`) REFERENCES `Jour`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE MATERIEL
-- ============================================================
CREATE TABLE IF NOT EXISTS `Materiel et lignes` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `jour_id` INT NOT NULL,
  `Materiel et lignes` LONGTEXT,
  FOREIGN KEY (`jour_id`) REFERENCES `Jour`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE PRISES
-- ============================================================
CREATE TABLE IF NOT EXISTS `Prises` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `jour_id` INT NOT NULL,
  `Nombre` VARCHAR(50),
  `Espece` VARCHAR(100),
  `Taille` VARCHAR(50),
  `poids` VARCHAR(50),
  `Appât` VARCHAR(100),
  FOREIGN KEY (`jour_id`) REFERENCES `Jour`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE REMARQUES
-- ============================================================
CREATE TABLE IF NOT EXISTS `Remarques, anecdotes...` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `jour_id` INT NOT NULL,
  `Remarques, anecdotes...` LONGTEXT,
  FOREIGN KEY (`jour_id`) REFERENCES `Jour`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- INDEX pour meilleures performances
-- ============================================================
CREATE INDEX idx_jour_date ON `Jour`(`Date`);
CREATE INDEX idx_meteo_jour ON `Meteo`(`jour_id`);
CREATE INDEX idx_eau_jour ON `l'eau`(`jour_id`);
CREATE INDEX idx_fond_jour ON `le fond`(`jour_id`);
CREATE INDEX idx_amorce_jour ON `Composition de l'amorce`(`jour_id`);
CREATE INDEX idx_materiel_jour ON `Materiel et lignes`(`jour_id`);
CREATE INDEX idx_prises_jour ON `Prises`(`jour_id`);
CREATE INDEX idx_remarques_jour ON `Remarques, anecdotes...`(`jour_id`);
