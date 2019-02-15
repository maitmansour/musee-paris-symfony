# Musee Symfony
Site web en symfony, Web-Info L3, réaliser par :
  - BELGHARBI Meryem
  - AIT MANSOUR Mohamed


--- 
## Comment ça marche
### Installation
```sh
$ https://github.com/maitmansour/musee-paris-symfony.git
$ php composer.phar update
```

Une erreur type : `[RuntimeException]                                                         
  An error occurred when executing the "'cache:clear --no-warmup'" command:  
  Could not open input file: app/console ` Va se générer, ignore le et passe à l'étape suivante !

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
