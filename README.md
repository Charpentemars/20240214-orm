# Exemple d'utilisation d'un ORM en PHP

## Prérequis
- PHP (testé avec 8.1 ou supérieur)
- Composer
- MySQL ou MariaDB
- Un environnement de serveur web (Apache, Nginx, etc.)

## Installation
1. Cloner le dépôt
2. Installer les dépendances avec `composer install`
3. Créer une base de données MySQL ou MariaDB
4. Copier le fichier `.env.example` en `.env` et modifier les variables d'environnement pour y ajouter les informations de connexion à la base de données
5. Dans un terminal, exécuter le script `php bin/doctrine orm:schema-tool:create --dump-sql` pour voir le code SQL qui sera exécuté
6. Si le code SQL vous convient, exécuter le script `php bin/doctrine orm:schema-tool:create` pour créer les tables dans la base de données
7. Générer les données de la table "roles" avec la commande `php bin/create_roles.php` et vérifier qu'ils sont créés dans la base de données
8. Générer les données de la table "users" avec la commande `php bin/create_users.php` et vérifier qu'ils sont créés dans la base de données
9. Lancer un serveur web pour accéder à l'application

## Installation avec Laragon et PHPStorm
1. Dans Laragon, créer un nouveau projet avec le nom de votre choix
2. Sur votre compte GitHub, créer un fork du dépôt
3. Cloner le fork dans le dossier du projet
4. Ouvrir le projet avec PHPStorm
5. Installer les dépendances avec `composer install`
6. Créer une base de données MySQL ou MariaDB
7. Copier le fichier `.env.example` en `.env` et modifier les variables d'environnement pour y ajouter les informations de connexion à la base de données
8. Dans un terminal, exécuter le script `php bin/doctrine orm:schema-tool:create --dump-sql` pour voir le code SQL qui sera exécuté
9. Si le code SQL vous convient, exécuter le script `php bin/doctrine orm:schema-tool:create` pour créer les tables dans la base de données
10. Générer les données de la table "roles" avec la commande `php bin/create_roles.php` et vérifier qu'ils sont créés dans la base de données
11. Générer les données de la table "users" avec la commande `php bin/create_users.php` et vérifier qu'ils sont créés dans la base de données
12. Lancer un serveur web pour accéder à l'application

## Utilisation
- Accéder à la page d'accueil pour voir la liste des utilisateurs

## Licence
Ce projet est sous licence MIT
