# Gestion d'événements

## Objectif

Réaliser un CRUD avec un mini-framework maison MVC. Ce projet sera à faire par groupe de 2 ou 3.

## Fonctionnalités

* Liste des événements (title, start_at, nom de l'auteur, nom de la catégorie)
* Le détail d'un événement (title, description, start_at, adress, nom de l'auteur, nom de la catégorie)
* Création d'un événement
* Mise à jour de l'événement
* Suppression de l'événement
* Inscription
* Connexion

## Base de données

* events (id, title, description, start_at, address, created_at, user_id, category_id)
* users (id, username, email, password, created_at)
* categories (id, name)
* comments (id, user_id, event_id)

## Mise en place du projet

* Créer un dépôt github pour le projet
* Donner les droits aux membres du groupe
* Récupérer le code du framework et le mettre dans un dossier
* Mettre à jour le dépôt github avec le code du framework

## Exemple de répartition des taches

* Une personne va créer la base de données et faire un export SQL (qui sera mis sur github)
* Une personne va créer la page d'accueil
* ...