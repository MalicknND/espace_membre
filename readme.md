# Projet PHP - Formulaires de Connexion

Ce projet PHP est conçu pour démontrer la mise en œuvre des fonctionnalités d'inscription, de connexion et de déconnexion d'utilisateurs, en utilisant PHP pour le traitement des données, la gestion des sessions et des cookies, ainsi que PDO pour la connexion à la base de données.

## Fonctionnalités

- **Inscription des utilisateurs :** Les utilisateurs peuvent créer un compte en fournissant un pseudo, une adresse e-mail et un mot de passe. Les données sont vérifiées et insérées dans la base de données.
- **Connexion des utilisateurs :** Les utilisateurs peuvent se connecter en fournissant leur pseudo et leur mot de passe. Les informations sont vérifiées par rapport à la base de données et une session est créée pour l'utilisateur connecté.
- **Déconnexion des utilisateurs :** Les utilisateurs connectés peuvent se déconnecter de leur session, ce qui supprime les informations de session et les cookies associés.
- **Utilisation de sessions et de cookies :** Les sessions PHP sont utilisées pour maintenir l'état de connexion de l'utilisateur, tandis que les cookies sont utilisés pour stocker des informations sur l'utilisateur.

## Structure du Projet

Le projet est organisé comme suit :

projet/
│
├── index.php # Page d'accueil et de formulaire d'inscription
├── login.php # Page de connexion
├── logout.php # Page de déconnexion
│
├── src/ # Dossier source pour la connexion PDO à la base de données
│ └── db.php # Script PHP pour la connexion à la base de données
│
└── styles/ # Dossier contenant les fichiers CSS pour la mise en forme
└── style.css # Feuille de style CSS pour la mise en forme des pages

## Utilisation

1. Clonez ce dépôt sur votre serveur web local ou distant.
2. Configurez votre environnement de développement PHP et votre base de données MySQL.
3. Importez le fichier de la base de données fourni (`espace_membres.sql`) pour créer la structure de base de données nécessaire.
4. Modifiez le fichier `src/db.php` pour configurer les informations de connexion à la base de données.
5. Accédez aux pages `index.php`, `login.php` et `logout.php` dans votre navigateur pour tester les fonctionnalités d'inscription, de connexion et de déconnexion.

## Remarque

Ce projet est destiné à des fins éducatives et peut être étendu avec d'autres fonctionnalités telles que la récupération du mot de passe, la gestion des profils utilisateur, etc.

---

**Auteur :** [Malick Siguy NDIAYE](https://github.com/MalicknND)
