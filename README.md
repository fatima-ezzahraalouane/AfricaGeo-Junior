# Africa-Geo-Junior


# Contexte du projet

Une école souhaite enrichir son programme pédagogique avec un outil interactif sous forme de jeu éducatif pour développer les connaissances géographiques des élèves. L’objectif est de concevoir un site web éducatif interactif permettant aux élèves d’apprendre et de tester leurs connaissances sur le continent AFRIQUE : les pays, leurs capitales et leurs villes importantes.

## Users Stories

### En tant que concepteur :

- **Diagramme de cas d’utilisation** : Identifier les fonctionnalités principales :
  - Ajout d’un pays africain avec ses villes clés, population et langues officielles.
  - Modification ou suppression des informations d’un pays existant.
  - Affichage des pays du continent AFRIQUE avec leurs détails.

- **Modélisation de la base de données** : Création d’un diagramme relationnel (ERD) illustrant :
  - Les relations entre les pays et leurs villes phares.
  - Les attributs des entités (population, langue, etc.).

### En tant que développeur Back-End :

- **Conception de la base de données** :
  - Pays : ID, Nom, Population, Langue(s) officielle(s), Continent.
  - Villes : ID, Nom, Description, Type (capitale ou autre).

- **Écriture de requêtes SQL** :
  - Ajouter un pays africain avec ses informations (population, langue, villes).
  - Modifier les détails d’un pays ou d’une ville.
  - Supprimer un pays et toutes ses villes associées.
  - Afficher la liste des pays africains et leurs détails.

- **Développement en PHP** :
  - Effectuer les actions CRUD (Create, Read, Update, Delete) sur les pays et leurs villes.
  - Connecter la base de données pour afficher dynamiquement les informations des pays.

---