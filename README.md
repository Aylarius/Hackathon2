Hackathon2 - Application Movember
==============
Projet Symfony2 (version 2.8) créé pour la mise en place d'une application pour le mouvement Movember permettant de publier et localiser des photos des plus belles moustaches.

## Pré-requis

Composer ==> https://getcomposer.org/  
Symfony 2.8 ==> https://symfony.com/download

## Bundles

FOSUserBundle ==> http://symfony.com/doc/current/bundles/FOSUserBundle/index.html  
VichUploaderBundle ==> https://github.com/dustin10/VichUploaderBundle  
AppBundle  
MovBundle  

## Procédure d'installation  
  
1. Pour cloner le projet, saisir dans le terminal :  
`git clone https://github.com/Aylarius/hackathon2.git`  
  
2. Entrer dans le dossier :  
`cd hackathon2` 

3. Installer composer en saisissant dans le terminal :  
`composer install`  
  
4. A la fin du composer install, configurer la base de donnée  
`database_name (symfony):`  
`database_user (root):`   
`database_password (null):`
  
5. Créer votre base de données via le terminal :  
`php app/console doctrine:database:create`  
  
6. Mettre à jour votre base de données via le terminal :  
`php app/console doctrine:schema:update --force`  
  
7. Enfin mettre les droits sur le projet en saisissant dans le terminal :  
`sudo chmod -R 777 web/images/ app/cache/ app/logs/`  

8. Vous pouvez désormais afficher le site via votre localhost de cette façon :  
`localhost/hackathon2/web/` 

9. Si les images ne s'affichent pas, il est nécessaire de modifier les liens dans le fichier config.yml (app/config/) :  
<pre>vich_uploader:
    db_driver: orm
    mappings:
        membres_image:
            uri_prefix:         /hackathon2/web/images/membres
            upload_destination: '%kernel.root_dir%/../web/images/membres'
            inject_on_load:     false
            delete_on_update:   true
            delete_on_remove:   true
        folder_images:
            uri_prefix:         /hackathon2/web/images
            upload_destination: '%kernel.root_dir%/../web/images'
            inject_on_load:     false
            delete_on_update:   true
            delete_on_remove:   true
        evenements_image:
            uri_prefix:         /hackathon2/web/images/evenements
            upload_destination: '%kernel.root_dir%/../web/images/evenements'
            inject_on_load:     false
            delete_on_update:   true
            delete_on_remove:   true
</pre>
Pour cela, modifier les champs **uri_prefix** pour correspondre au chemin d'accès du dossier *clubdelopinion* depuis votre localhost. Ainsi si votre localhost est :
`localhost/~nomutilisateur/projets/hackathon2/web/`  
Il vous suffit de modifier les **uri_prefix** en ajoutant `/projets`, de cette façon :  
`/projets/hackathon2/web/images/membres`  

**Attention :**  
Parfois sur Mac OS X, les images ne s'affichent pas en localhost, il est alors nécessaire de saisir dans le terminal :  
`php app/console server:run`  

Le terminal affichera alors un message de type :  
`[OK] Server running on http://127.0.0.1:8000`  

Vous pourrez donc accéder au site en utilisant l'URL indiqué et il faudra changer les **uri_prefix** en ne gardant que les dossiers après `web`, de cette façon : `/images/membres`.  

## Création d'un super administrateur  

1. Créer un super administrateur (ici nommé "admin") via le terminal :  
`php app/console fos:user:create admin --super-admin`  
  
2. Il vous est ensuite demandé d'indiquer un email et un mot de passe pour votre super administrateur  
  
3. Pour accéder à la partie administrable du site, ajouter `/login` à l'URL, exemple :
`localhost/hackathon2/web/login`
