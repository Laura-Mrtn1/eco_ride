# ? Déploiement du projet

Pour le déploiement de le projet EcoRide j'utilise Docker et Docker Compose pour exécuter une application web localement ou sur un serveur.

---

## ? Les prérequis

- [Git](https://git-scm.com/)
- [Docker Desktop](https://www.docker.com/products/docker-desktop)

> ?? Docker Desktop doit être **lancé** avant toute utilisation.

---

## ? Déploiement local

### 1. Cloner le projet

```bash
git clone https://github.com/Laura-Mrtn1/eco_ride.git
cd eco_ride
```

### 2. Lancer le projet avec Docker

Pour construire l'image personnalisé Apache + PHP et lancer tous les conteneurs : 

> docker-compose up -d --build

### 3. Accéder aux interfaces

Une fois les conteneurs démarrés, vous pouvez accéder aux différentes services : 

> Site web : https://localhost

> phpMyAdmin https://localhost:8081

### 4. Accès aux bases de données

    - MariaDB

    Utilisateur : utilisateur
    Mot de passe : motdepasse_utilisateur
    Base de données : nom_de_la_base

    - MongoDB

    Port : 27017
    Données stockées dans : ./data/mongodb/


### 5. Licence

Projet open-source réalisé par Laura.M

