# Musee Symfony
Site web en symfony, Web-Info L3, réaliser par :
  - BELGHARBI Meryem
  - AIT MANSOUR Mohamed


--- 
## Comment ça marche
### Installation
```sh
$ git clone https://www-apps.univ-lehavre.fr/forge/Amazing/TP-MUSEE.git
$ php composer.phar update
```

--- 

### Mise à jour de base de données
Avant de mettre à jour les données de la base de données, ` penser à modifier Parametres.yml` , et mettre dedans votre login/mot de passe, maintenant il faut valider ces modifications puis générer les entités...

```sh
$ php bin/console cache:clear --no-warmup 
$ php bin/console doctrine:schema:update --force
```

--- 
### Géneration des données
```sh
$ php bin/console doctrine:fixtures:load
```

--- 

### Démarrage
```sh
$ php bin/console server:run
```

---