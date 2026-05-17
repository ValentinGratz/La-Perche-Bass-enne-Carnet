# La Perche Basséenne Carnet

Carnet en localhost pour la saisie des journées de pêche.

## 📖 Présentation

Réalisation au format HTML/PHP d'un fichier pour saisir les données sur la journée de pêche, avec la possibilité de retrouver les données d'une journée par date.

Fichier réalisé à l'aide d'un template Bootstrap `sb-admin-2`. Le projet est passé d'Access/LibreOffice à une version web locale avec wizard d'installation type WordPress.

## 🔧 Pré-requis

- **PHP** 8.0+
- **MySQL** 5.7+ ou MariaDB
- **XAMPP** / **WAMP** / **MAMP** installé

## 📦 Installation en local

Ce projet s’installe avec un assistant d’installation.

#### **1. Copier les fichiers**
Télécharge le projet et décompresse-le dans le dossier `www` ou `htdocs` de ton logiciel localhost :

| Logiciel | Dossier à utiliser |
| --- | --- |
| **XAMPP** | `C:\xampp\htdocs\la_perche` |
| **WAMP** | `C:\wamp64\www\la_perche` |
| **MAMP** Mac | `/Applications/MAMP/htdocs/la_perche` |
| **MAMP** Windows | `C:\MAMP\htdocs\la_perche` |

> **Note :** Tu peux renommer le dossier `la_perche` comme tu veux.

#### **2. Lancer les services**
Démarre **Apache** et **MySQL** depuis le panneau de contrôle de XAMPP / WAMP / MAMP.

#### **3. Lancer l’assistant d’installation**
Ouvre ton navigateur et va sur l’URL correspondant à ton logiciel :

| Logiciel | URL d’installation |
| --- | --- |
| **XAMPP** | `http://localhost/la_perche/install.php` |
| **WAMP** | `http://localhost/la_perche/install.php` |
| **MAMP** Mac | `http://localhost:8888/la_perche/install.php` |
| **MAMP** Windows | `http://localhost/la_perche/install.php` |

> **Important :** Ne pas mettre `/mamp/htdocs/` dans l’URL. Le dossier `htdocs` est déjà la racine.  
> Pour MAMP Mac, le port par défaut est `:8888`. Pour MAMP Windows c’est `:80` donc pas besoin du port.

#### **4. Suivre le wizard**
Une fois sur `install.php`, suis les étapes :
1. **Connexion à la base de données** : entre l’hôte `localhost`, l’utilisateur `root`, et laisse le mot de passe vide sur XAMPP/WAMP/MAMP par défaut. Le wizard peut créer la BDD pour toi.
2. **Création du compte admin** : choisis ton identifiant et mot de passe.
3. **Finalisation** : le fichier `config.php` est généré automatiquement.

C’est prêt ! Connecte-toi et va sur la page **"Suivi"** pour saisir tes journées de pêche 🎣

## 📝 Changelog

### **v1.7 Stable** - *17/05/2026*
**Version finie, stable et utilisable** 🎣

**🐛 Fix**
- Corrections critiques du système d'installation
- Correction chemin Windows/Linux avec `DIRECTORY_SEPARATOR`

**✨ Feature**
- Wizard d'installation type WordPress

**🗄 Improvement**
- BDD restructurée avec clés étrangères
- Affichage des données filtrées correctement par date
- Gestion sécurisée des identifiants MAMP

### **v1.0 Build 7**
- Changement de format BDD, au format SQL
- Correction de connexion à l'aide de Copilot

### **v1.0 Build 6**
- Modification de nom de deux champs du formulaire

### **v1.0 Build 5**
- Modification du titre des pages + guide d'utilisation rédigé

### **v1.0 Build 4**
- Page formulaire, suivi mises en forme, refonte de la bdd en sqlite

### **v1.0 Build 1**
- Version web partie html réalisée uniquement

### **v1.0**
- Version web en local

### **v0.2**
- Fichier sous LibreOffice Base de données : impossible à l'ouvrir

### **v0.1**
- Fichier sous Access : problème de saisie du formulaire

## 🚧 Travail restant

### **Niveau HTML :**
- ~~ajout d'un bouton pour valider le formulaire~~
- ~~Activer et faire fonctionner le bouton~~
- faire la page `suivi.html` qui affiche les données saisie à partie du fichier sql dans un tableau

### **Niveau SQL :**
- ~~création du fichier sql~~
- ~~insertion du fichier dans le index.html~~

### **Niveau PHP :**
- ~~insertion en php pour le formulaire (liaison entre la page et le fichier sql)~~
- **Bug :** Ne trouve plus le fichier sql à l'étape 2 du wizard

## © COPYRIGHT

Ce projet est personnel, donc aucune copie partielle ou totale n'est autorisée.  
Je publie ce projet pour seulement avoir votre aide, n'étant que débutant en programmation.

Pour certaines parties des fichiers, j'ai eu l'aide d'un ami.
