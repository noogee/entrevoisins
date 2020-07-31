# entrevoisins
projet web services
php bin/console d:d:c
----> pour la base de donnée
----------------------------------
php bin/console make:entity
Pour la crétation d'une entité
le contenu de la table
---------------------------------
php bin/console doctrine:schema:create
c'est pour lancé les table (entity) dans la base de donnée
--------------------------
symfony server:start
Pour lancer le server php
--------dans votre Postman--------
localhost:8000/voisins
POST
{
    "phone" : "6494658O",
    "name": "testestets",
    "address" : "testestets",
    "about": "yetiegdqkg",
    "favoris": false
}

------------------------------------
localhost:8000/voisins
GET

------------------------------------
localhost:8000/voisins/3
GET
------------------------------------
localhost/voisins/1
PUT
---------------------------------------
