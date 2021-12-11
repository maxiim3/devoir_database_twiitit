MY_SQLCOURSES
==============
OPEN CLASSROOM
--------------

###Implémentez des relations entre vos données grâce à JOIN
>Extrayez des informations via une relation 1 à plusieurs **one-to-many**
> ![img.png](img.png)
> ![img_1.png](img_1.png)

>Obtenez des informations complexes via une relation plusieurs à plusieurs **many to many**
> ![img_2.png](img_2.png)
> ![img_3.png](img_3.png)
> ![img_4.png](img_4.png)
> ![img_5.png](img_5.png)
>

Voici les explications de cette commande :

- On modifie toujours la structure d’une table avecALTER TABLE.
- On lui signale à nouveau quelle table modifier (ici, “aliment”).
- On lui indique que la modification va modifier le nom d’une colonne avecCHANGE.
- On mentionne le nom de la colonne à renommer, ainsi que son nouveau nom (ici, “sucre” devient “sucres”).
- On indique le nouveau type de la colonne (ici,FLOAT).
- Vous savez que toute modification de la structure d’un objet s’effectue avec une commandeALTER TABLE.
- Pour ajouter un champ à un objet, il vous faut utiliser le mot cléADD.
- Pour supprimer un champ, le mot clé estDROP.
- Pour modifier un champ, le mot clé estMODIFYpour en modifier la structure,CHANGEpour le renommer.