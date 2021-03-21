
#Projet GestyFood
*** 
##A faire lorsqu'on récupère le projet sur GitHub :

##Créer le fichier .env.local :
```dotenv
DATABASE_URL=mysql://root:root@127.0.0.1:8889/gestyfood?serverVersion=5.7
```

```shell script
composer install
php bin/console doctrine:database:drop --force
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load
symfony serve
```

##Installation et compilation des assets :
```shell script
npm install
npm run watch
```
****************************************************************
****************************************************************
****************************************************************
## Création du projet GestyFood
-[X] Effectué
```shell script
symfony new --full gestyfood
```
## mise en place du server symfony
-[x] Effectué
```shell script
symfony serve
```

                                                                ## COMMIT !!

### Installation de Maker bundle
### Doctrine ORM
-[x] Déjà effectué en Full

###Configurer la connexion à la base de données en créant le fichier .env.local :
   ```dotenv
   DATABASE_URL=mysql://root:root@127.0.0.1:8889/gestyfood?serverVersion=5.7
   ```
                                                                    ## COMMIT !!

##Créer la base de données :
-[x] Effectué
```shell script
php bin/console doctrine:database:create
```

##Créer les entités Doctrine :
-[x] Effectué
```shell script
php bin/console make:entity
```

##SAUF POUR L'ENTITE User :
-[x] Effectué
```shell script
composer req security
php bin/console make:user
```

##Créer le fichier de migration puis l'exécuter :
-[x] Effectué
```shell script
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```
                                                                    ## COMMIT !!
*************************************************
# Créer les données de test

##Installer DoctrineFixturesBundle :
-[X] Effectué
```shell script
composer req orm-fixtures --dev
```

##Créer des fichiers de fixtures pour chaque entity :
-[] Effectué
```shell script
php bin/console make:fixtures
```

##Execute les fixtures :
-[x] Effectué
```shell script
php bin/console doctrine:fixtures:load
```
                                                                    ## COMMIT !!
*************************************************

#mise en place du composant api_platform

##installer le composant Api Platform  :
-[x] Effectué
```shell script
composer require api
```
##création  :