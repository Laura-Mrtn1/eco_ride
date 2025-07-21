# ? D�ploiement du projet

Pour le d�ploiement de le projet EcoRide j'utilise Docker et Docker Compose pour ex�cuter une application web localement ou sur un serveur.

---

## ? Les pr�requis

- [Git](https://git-scm.com/)
- [Docker Desktop](https://www.docker.com/products/docker-desktop)

> ?? Docker Desktop doit �tre **lanc�** avant toute utilisation.

---

## ? D�ploiement local

### 1. Cloner le projet

```bash
git clone https://github.com/Laura-Mrtn1/eco_ride.git
cd eco_ride
```

### 2. Lancer le projet avec Docker

Pour construire l'image personnalis� Apache + PHP et lancer tous les conteneurs : 

> docker-compose up -d --build

### 3. Acc�der aux interfaces

Une fois les conteneurs d�marr�s, vous pouvez acc�der aux diff�rentes services : 

> Site web : https://localhost

> phpMyAdmin https://localhost:8081

### 4. Acc�s aux bases de donn�es

    - MariaDB

    Utilisateur : utilisateur
    Mot de passe : motdepasse_utilisateur
    Base de donn�es : nom_de_la_base

    - MongoDB

    Port : 27017
    Donn�es stock�es dans : ./data/mongodb/


### 5. Licence

Projet open-source r�alis� par Laura.M

