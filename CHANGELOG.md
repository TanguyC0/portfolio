# 0.2.3 (2022-06-13)


### Bug

* en dessous d'une certaine taille, le texte du footer empiéte sur le reste de la page.

### Patch

* La page Contacte à été édité

# 0.2.2 (2022-06-10)


### Bug Fixes

* le pied de page est affiché en bas de page meme si le corps de la page est vide
* le positionnement de la photo de profil est correctement géré sur la page `cv`

### Patch

* la page `cv` a été completé

# 0.2.1 (2022-06-07)


### Bug

* image de profil probléme de positionnement

### Features

* ajout de la fonction "404"
* ajout de la page `cv`

# 0.2 (2022-06-05)


### Patch

* organisation des fichiers dans les dossiers -> (finalisation de la mise en place propre du format mvc)

### Feature

* ajout d'un lien vers une page `accueil`
* ajout de l'utilisation de base de données (V 1.0 de la BDD)
* mise en place de l'utilisation de la base de données pour la page `liste des projet`
* ajout de la possibiliter d'accédé au page `accueil`, `cv` et `contact` (non faite)

### Fix

* la page `index` devient la page `garde`

# 0.1.2 (2022-06-02)


### Bug Fixes

* taille de la fenêtre agrandie sur la page `projet`.
* correction des utilisation des lien reliant chaque page (mvc)

### Features

* page `projet` terminé et fonctionnelle.

# 0.1.1 (2022-05-31)


### Bug

* taille de la fenêtre agrandie sur la page `projet`.

### Bug Fixes

* Correction du visuel de la page `liste des projets` : grossisement de la bordure des articles et ajout d'une ombre en dessous du menu.
* correction du responsive de la page `liste des projets`. Quand la dimention horizontal etait trop petite, les description de projet s'étendait annormalement vers le bas.

### Features

* rearangement des fichier et passage en mvc.
* implémentation de php.
* implémentation des lien du menu et des projets. (pour le moment, seul le lien `projets` du menu est implémenté correctement)
* implémentation de la page `projet` (html, css, php).

# 0.1 (2022-05-30)


### Features

* Debut du projet
* Ajout de la page `index` (html) et de sa mise en forme (css). Cette page est la page de garde du site. Elle ne sera visible qu'une seul fois et renverra vers la page d'accueil du site.
    * Séparation image/texte.
    * Gestion des couleur de la page `index`
    * Premier jet du texte
* Ajout de la page `liste des projets` (html) et de sa mise en forme (css). Cette page affiche la liste des projets réaliser mis à disposition sur le site.
    * Création du squelettes de la page `liste des projets` (navbar, footer, etc.)
    * Mise en place de la gestion/visualisation de la liste des projet (forme html)
    * Gestion du style de la page (couleur, police, etc.)
* Liaison de la page `index` à la page liste des projets.