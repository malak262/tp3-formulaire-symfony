# TP 3 – Formulaires Symfony
**EHEI 2025/2026**

## Étudiante
Nom : ZERROUK Malika 
Groupe:E

## Objectif du TP
L’objectif de ce TP est de comprendre et manipuler :
- Les formulaires en Symfony
- Les Controllers
- Les Routes avec Attributes
- Les templates Twig
- L’héritage de templates avec `base.html.twig`


##  Structure du projet
- `src/Controller/ProductController.php`  
  Gère la route `/product` et l’affichage du formulaire
- `src/Form/ProductType.php`  
  Définit les champs du formulaire (quantity, email, etc.)
- `templates/base.html.twig`  
  Template principal
- `templates/product/index.html.twig`  
  Affichage du formulaire
- `config/routes.yaml`  
  Configuration du chargement des routes par attributs


##  Fonctionnement
- L’utilisateur accède à `/product`
- Le formulaire est affiché
- Lors de la soumission, Symfony traite les données via `Request`
- Les données sont récupérées avec `$form->getData()`


##  Résultat
Le formulaire s’affiche correctement et les données sont traitées côté serveur.


## Remarque
Ce TP m’a permis de mieux comprendre le fonctionnement des formulaires Symfony et la relation entre Controller, FormType et Twig.
