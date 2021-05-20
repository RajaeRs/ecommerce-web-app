# Conception d’une plateforme web d’e-Commerce:

_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _

## PREFACE:

Notre fil rouge se focalise sur l’étude, la conception et la réalisation d’un site de commerce électronique pour le compte de l’entreprise TIKTAK. Les objectifs de ce site sont de : 

- Présenter les produits dans une boutique virtuelle à la disposition de tout le monde, 

- Faire des transactions commerciales en ligne, 

- Faciliter la tâche de payement en ligne 

- Suivre la vente des produits. 

_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _

## INTRODUCTION GENERALE

### 1 -  Problématique :

Aujourd’hui le e-Commerce devient de plus en plus l’un des services les plus forts de l’Internet, et cela revient à la diffusion de l’information sur le web qui est rapide et pas coûteuse, ce qui permet une expansion publicitaire d’un nouveau produit, avec un coût de publicité très économique, ce qui encourage les entreprises offrants le service de vente, de choisir le e-Commerce. 

​		Pour cette objective on a réaliser un site web dynamique qui répondra aux besoins suivants : 

- Commercialiser les produits de l’entreprise sur le web.
-  Permettre aux clients de s’inscrire à l’entreprise.
- Permettre aux clients de réaliser des commandes via le web.
- Permettre l'administration de l'entreprise de géré et contrôler leur produit, ventes, clients ... . 

### 2 - Map de site:

![UML-map de site web](https://user-images.githubusercontent.com/75434277/117878688-853a6500-b295-11eb-9d87-f350f47f7697.png)

_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _

# ANALYSE ET CONCEPTION DU SYSTEME

## Introduction 

Nous allons en premier lieu, analyser le système en élaborant le cahier de charge du projet. En deuxième lieu, nous allons monter la manière dont nous avons conçu le système en représentant quelques diagrammes UML. Et enfin, nous présenterons l’implémentation du projet par quelques écrans imprimés des principales interfaces réalisées dans notre site web.

## le cahier de charge du projet:

Développer une interface permettant à l’administrateur du site de gérer les aspects suivant:

### ## Gestion des produits

- Ajouter un produit
- Modifier un produit
- Supprimer un produit
- Visualiser un produit

### ## Gestion des catégories

- Ajouter une catégorie
- Modifier une catégorie
- Supprimer une catégorie
- Visualiser une catégorie

### ## Gestion des clients

- Modifier un client
- Supprimer un client
- Visualiser un client

Plus que une interface pour l'administration 

### ## Admin Panel

- Interface Admin Login
- Mettre en place une gestion des visuels produits
- Affichez les statistiques des produits, clients

Avec une interface client qui donne les possibilité suivant 

- Interface client Login
- Interface des produits.
- la possibilité d'ajouté ou supprimé les produit au panier.

## UML:

###  Diagrammes UML 

####  Diagramme de Cas d’utilisation

 Les rôles des diagrammes de cas d’utilisation sont de recueillir, d’analyser et d’organiser les besoins, ainsi que de recenser les grandes fonctionnalités d’un système. Il s’agit donc de la première étape UML pour la conception d’un système. 

- Les acteurs du projet :

  Le visiteur : c’est un individu qui est entrain de fouiller sur le net, cherchant un produit pour l’acheter ou pour avoir une idée sur les modèles et les prix. Jusqu’au ce stade c’est un utilisateur inconnu donc il n’est pas encore un client.

  Le Client : cette acteur est un visiteur ayant déjà créer un compte sur notre site, il peut donc suivre le processus d’achat des produits en toute sécurité sachant que notre système doit être l’unique responsable de la confidentialité des données personnelles de ses clients. 

  L’administrateur : pour les sites web on l’appelle généralement « le webmaster 21». C’est celui qui assure le dynamisme du site et veille sur les mises à jour des produits, de leurs prix, de leurs disponibilités, de la gestion des payements et la gestion des livraisons.
  
  #### ![UML-cas d'utilisation](https://user-images.githubusercontent.com/75434277/117878845-b7e45d80-b295-11eb-9857-a2cea1499c52.png)
  
    

#### Diagramme de séquence 

Un diagramme de séquences est un diagramme d'interaction qui expose en détail la façon dont les opérations sont effectuées : quels messages sont envoyés et quand ils le sont . 

Les diagrammes de séquences sont organisés en fonction du temps qui s'écoule au fur et à mesure que nous parcourons la page. 

Les objets impliqués dans l'opération sont répertoriés de gauche à droite en fonction du moment où ils prennent part dans la séquence.

#### ![UML-Séquence de l'inscription](https://user-images.githubusercontent.com/75434277/117879063-0134ad00-b296-11eb-8a1c-2c0db06db067.png)Diagramme de Classes 

Un diagramme de classes UML décrit les structures d'objets et d'informations utilisées sur notre site web, à la fois en interne et en communication avec ses utilisateurs. Il décrit les informations sans faire référence à une implémentation particulière. Ses classes et relations peuvent être implémentées de nombreuses manières, comme les tables de bases de données, les nœuds XML ou encore les compositions d'objets logiciel.

![UML-diagramme de classe](https://user-images.githubusercontent.com/75434277/117879117-19a4c780-b296-11eb-8a94-5651cca9bcff.png)
