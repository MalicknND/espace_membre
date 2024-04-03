# Projet PHP - Gestion d'inscription et de connexion

Ce projet PHP est conçu pour illustrer les concepts de base de la création d'un système d'inscription et de connexion avec PHP, ainsi que le traitement des données associées.

## Fonctionnalités

- **Inscription des utilisateurs :** Le projet permet aux utilisateurs de s'inscrire en fournissant leur nom d'utilisateur, leur adresse e-mail et leur mot de passe.
- **Connexion des utilisateurs :** Les utilisateurs peuvent se connecter en fournissant leur nom d'utilisateur et leur mot de passe.
- **Déconnexion des utilisateurs :** Les utilisateurs connectés peuvent se déconnecter de leur session.
- **Traitement des données :** Les données fournies lors de l'inscription et de la connexion sont vérifiées et traitées côté serveur pour assurer la sécurité et l'intégrité des données.

## Utilisation

1. Clonez ce dépôt sur votre serveur web local ou distant.
2. Configurez votre environnement de développement PHP et votre base de données MySQL.
3. Importez le fichier de la base de données fourni (`database.sql`) pour créer la structure de base de données nécessaire.
4. Modifiez le fichier `config.php` pour configurer les informations de connexion à la base de données.
5. Accédez à l'application dans votre navigateur et explorez les fonctionnalités d'inscription, de connexion et de déconnexion.

## Structure du projet

- **index.php :** Page d'accueil de l'application avec des liens vers les pages d'inscription et de connexion.
- **register.php :** Page d'inscription où les utilisateurs peuvent créer un nouveau compte.
- **login.php :** Page de connexion où les utilisateurs peuvent se connecter à leur compte existant.
- **logout.php :** Page de déconnexion où les utilisateurs connectés peuvent se déconnecter de leur session.
- **config.php :** Fichier de configuration contenant les informations de connexion à la base de données.
- **functions.php :** Fichier contenant des fonctions utilitaires pour la validation et le traitement des données.
- **database.sql :** Script SQL pour créer la structure de base de données.

## Remarques

Ce projet est conçu à des fins éducatives et peut être étendu avec d'autres fonctionnalités telles que la réinitialisation du mot de passe, la gestion des profils utilisateur, etc.

---

**Auteur :** [Malick Siguy ](https://github.com/MalicknND)
