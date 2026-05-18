-- ============================================================
-- La Perche Basséenne - Base de Données
-- Version 1.7 - Compatible avec l'application
-- ============================================================

SET NAMES utf8mb4;
SET CHARACTER SET utf8mb4;

-- ============================================================
-- TABLE SORTIES (Journées de pêche)
-- ============================================================
CREATE TABLE IF NOT EXISTS `sorties` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `date_sortie` DATE NOT NULL UNIQUE,
  `lieu` VARCHAR(255),
  `duree` VARCHAR(100),
  `meteo` VARCHAR(255),
  `vent` VARCHAR(100),
  `force_vent` VARCHAR(50),
  `phase_lunaire` VARCHAR(100),
  `type_eau` VARCHAR(100),
  `couleur_eau` VARCHAR(100),
  `force_courant` VARCHAR(100),
  `type_fond` VARCHAR(100),
  `notes` TEXT,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE PRISES (Poissons capturés)
-- ============================================================
CREATE TABLE IF NOT EXISTS `prises` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `sortie_id` INT NOT NULL,
  `espece` VARCHAR(100) NOT NULL,
  `poids` DECIMAL(5, 2),
  `taille` DECIMAL(5, 2),
  `heure_prise` TIME,
  `lieu_prise` VARCHAR(255),
  `technique` VARCHAR(100),
  `appat` VARCHAR(100),
  `notes` TEXT,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`sortie_id`) REFERENCES `sorties`(`id`) ON DELETE CASCADE,
  KEY `idx_sortie` (`sortie_id`),
  KEY `idx_espece` (`espece`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- TABLE UTILISATEURS (Futur)
-- ============================================================
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(100) UNIQUE NOT NULL,
  `email` VARCHAR(255) UNIQUE,
  `password_hash` VARCHAR(255),
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- DONNÉES D'EXEMPLE (Optionnel - À commenter si vide)
-- ============================================================
-- INSERT INTO `sorties` (`date_sortie`, `lieu`, `meteo`, `notes`) VALUES
-- ('2026-01-15', 'Rivière du Cher', 'Partiellement nuageux', 'Bonne journée de pêche');

COMMIT;
