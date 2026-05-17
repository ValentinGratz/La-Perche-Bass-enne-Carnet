# La Perche Basséenne Carnet
Carnet en localhost pour la saisie des journées de pèche. 

# Présentation
Réalisation au format html d'un fichier pour saisir les données sur la journée de pèche, avec la possibilité de retrouver les données d'une journée.
Fichier réalisé à l'aide d'un template bootstrap. 

# Changelog

  * v0.1 : Fichier sous Access : problème de saisie du formulaire
  * v0.2 : Fichier sous LibreOffice Base de données : impossible à l'ouvrir
  
  * v1.0 : Version web en local
  * v1.0 Build 1 : Version web partie html réalisée uniquement
  * v1.0 Build 4 : page formulaire, suivi mises en forme, refonte de la bdd en sqlite
  * v1.0 Build 5 : Modification du titre des pages + guide d'utilisation rédigé
  * v1.0 Build 6 : Modification de nom de deux champs du formulaire
  * v1.0 Build 7 : changement de format BDD, au format SQL
    
    correction de connexion à l'aide de copilot

### v1.7 stable : version finie stable et utilisable
- 🐛 Fix: Corrections critiques du système d'installation
- 🐛 Fix: Correction chemin Windows/Linux (DIRECTORY_SEPARATOR)
- ✨ Feature: Wizard d'installation type WordPress
- 🗄️ Improvement: BDD restructurée avec clés étrangères
- 📊 Improvement: Affichage des données filtrées correctement par date
- 🔐 Improvement: Gestion sécurisée des identifiants MAMP

## Travail restant
### Niveau html :
  * <s>ajout d'un bouton pour valider le formulaire</s>
  * <s>Activer et faire fonctionner le bouton</s>
  * <s>faire la page suivi.html qui affiche les données saisie à partie du fichier sql dans un tableau</s>
### Niveau SQL :
  * <s>création du fichier sql</s>
  * <s>insertion du fichier dans le index.html</s>
### Niveau PHP :
  * <s>insertion en php pour le formulaire (liaison entre la page et le fichier sql)</s>

  <s>Ne trouve plus le fichier sql à l'étape 2 du wizard</s>

  Reste juste le css de la page d'accueil une fois le wizard fini le css cassé, mais reviens quand on rafraichi. 

### **🔧 Pré-requis**
- **PHP** 8.0+
- **MySQL** 5.7+ ou MariaDB
- **XAMPP** / **WAMP** / **MAMP** installé

### **📦 Installation en local**

Ce projet s’installe comme un CMS classique type WordPress, avec un assistant d’installation.

#### **1. Copier les fichiers**
Télécharge le projet et décompresse-le dans le dossier `www` ou `htdocs` de ton logiciel localhost :

| Logiciel | Dossier à utiliser |
| --- | --- |
| **XAMPP** | `C:\xampp\htdocs\La-Perche-Bass-enne-Carnet` |
| **WAMP** | `C:\wamp64\www\La-Perche-Bass-enne-Carnet` |
| **MAMP** Mac | `/Applications/MAMP/htdocs/La-Perche-Bass-enne-Carnet` |
| **MAMP** Windows | `C:\MAMP\htdocs\La-Perche-Bass-enne-Carnet` |

> **Note :** Tu peux renommer le dossier `La-Perche-Bass-enne-Carnet` comme tu veux, par ex. `carnet-peche`

#### **2. Lancer les services**
Démarre **Apache** et **MySQL** depuis le panneau de contrôle de XAMPP / WAMP / MAMP.

#### **3. Lancer l’assistant d’installation**
Ouvre ton navigateur et va sur l’URL correspondant à ton logiciel :

| Logiciel | URL d’installation |
| --- | --- |
| **XAMPP** | `http://localhost/La-Perche-Bass-enne-Carnet/install.php` |
| **WAMP** | `http://localhost/La-Perche-Bass-enne-Carnet/install.php` |
| **MAMP** | `http://localhost:8888/La-Perche-Bass-enne-Carnet/install.php` |

> Si tu as renommé le dossier, remplace `La-Perche-Bass-enne-Carnet` par ton nom de dossier.  
> Pour MAMP, le port par défaut est `:8888`. Si tu l’as changé en `:80`, utilise juste `http://localhost/...`

#### **4. Suivre le wizard**
Une fois sur `install.php`, suis les étapes comme pour une installation WordPress :
1. **Connexion à la base de données** : entre l’hôte `localhost`, l’utilisateur `root`, et laisse le mot de passe vide sur XAMPP/WAMP par défaut. Le wizard peut créer la BDD pour toi.
2. **Création du compte admin** : choisis ton identifiant et mot de passe.
3. **Finalisation** : le fichier de config est généré automatiquement.

C’est prêt ! Tu peux ensuite te connecter et aller sur la page **"Suivi"** pour saisir tes journées de pêche et les retrouver par date 🎣

# © COPYRIGHT
Ce projet est personnel, donc aucune copie partielle ou totale n'est autorisée. 
Je publie ce projet pour seulement avoir votre aide, n'étant que débutant en programmation. 

Pour certaines partie des fichiers, j'ai eu l'aide d'un ami. 
