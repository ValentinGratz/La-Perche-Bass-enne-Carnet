# Guide d'Installation - La Perche Basséenne v1.0 Build 7

## 📋 Prérequis

- PHP 7.2+ avec PDO MySQL activé
- MySQL/MariaDB 5.5+
- Un serveur web (Apache, Nginx, etc.)

## 🔧 Étapes d'installation

### 1. Adapter le fichier de configuration

Ouvre `config.php` et modifie les identifiants :

```php
$db_host = 'localhost';       // Adresse du serveur MySQL
$db_user = 'root';            // Ton nom d'utilisateur MySQL
$db_password = '';            // Ton mot de passe MySQL
$db_name = 'valenti1_carnetperche';  // Nom de la base
```

### 2. Créer la base de données

**Via phpMyAdmin :**
1. Accède à phpMyAdmin (http://localhost/phpmyadmin)
2. Clique sur "Nouvelle base de données"
3. Nomme-la `valenti1_carnetperche`
4. Sélectionne le charset `utf8mb4`
5. Clique sur "Créer"

**Via MySQL CLI :**
```bash
mysql -u root -p
> CREATE DATABASE valenti1_carnetperche CHARACTER SET utf8mb4;
> USE valenti1_carnetperche;
> SOURCE valenti1_carnetperche.sql;
```

### 3. Importer la structure SQL

**Via phpMyAdmin :**
1. Sélectionne la base `valenti1_carnetperche`
2. Clique sur "Importer"
3. Choisis le fichier `valenti1_carnetperche.sql`
4. Clique sur "Exécuter"

**Via MySQL CLI :**
```bash
mysql -u root -p valenti1_carnetperche < valenti1_carnetperche.sql
```

### 4. Tester l'application

1. Lance un serveur PHP local :
   ```bash
   php -S localhost:8000
   ```

2. Ouvre http://localhost:8000 dans ton navigateur

3. Test du flux :
   - Va sur "Formulaire"
   - Remplis une sortie de pêche
   - Clique sur "Valider le formulaire"
   - Vérifie les données sur "Suivi"

## 📝 Architecture

```
.
├── config.php                 # Configuration BDD (À ADAPTER)
├── valenti1_carnetperche.sql # Structure de la base
├── pages/
│   ├── index.php              # Accueil
│   ├── forms.php              # Formulaire de saisie
│   ├── traiter_formulaire.php # Traitement POST
│   └── suivi.php              # Consultation des données
└── vendor/                    # Libraries Bootstrap, jQuery, etc.
```

## 🔒 Sécurité

✅ **Bonnes pratiques implémentées :**
- Requêtes paramétrées (anti-injection SQL)
- Transactions PDO (cohérence des données)
- Échappement HTML (htmlspecialchars)
- Gestion d'erreurs robuste

⚠️ **À faire ultérieurement :**
- Ajouter l'authentification utilisateur
- Valider côté client (JavaScript)
- Ajouter des logs d'audit

## 🐛 Dépannage

**"Erreur de connexion : SQLSTATE[HY000]"**
→ Vérifie les identifiants dans `config.php`

**"Table not found"**
→ Réimporte le fichier SQL

**Formulaire ne s'envoie pas**
→ Vérifie que PHP a accès à `/tmp` pour les sessions

## 📞 Support

Pour toute question, consulte le README.md du projet.
