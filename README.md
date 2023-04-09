# oBlog POO

Actuellement, oBlog affiche des données écrites « en dur » dans le code HTML. On souhaite rendre tout ça dynamique, c'est-à-dire que les articles ne devraient pas être écrits directement dans index.html, mais plutôt venir d'une source d'information séparée. Du code PHP s'occuperait d'injecter les derniers articles en date dans un template HTML :ok_hand:

Du coup… on va un peu structurer les données côté article, pour préparer le terrain :tada:

> Dans cet exercice, on abandonne temporairement l'idée d'une belle intégration HTML/CSS, pour se concentrer sur la programmation orientée-objet en PHP => on va travailler en noir & blanc, puis on reviendra plus tard dans oBlog !

## Une classe pour les articles

Le code du fichier index.php fourni dans ce repo permet de tester le bon fonctionnement d'une classe `Article`, qu'il va falloir écrire :thinking:

### Étapes d'implémentation

- Comme indiqué en commentaire dans index.php, définir une classe `Article` (dans index.php, ou dans un fichier dédié à inclure dans index.php, au choix).
- Définir les propriétés de cette classe (indice : lire & analyser le code de `index.php` en entier, ça peut vous aider à déterminer quelles propriétés sont requises).
- À plusieurs endroits dans index.php, il manque du code pour utiliser la classe `Article`. Compléter les blancs et tester que tout fonctionne comme prévu !

### Bonus

Créer une _méthode_ `getDateFr()` (rappel : méthode == propriété-fonction définie dans une classe) qui retourne la date au format `dd/mm/yyyy` (soit pour le 13 juillet 2017 => `"13/07/2017"`).

On partira du principe que la date fournie dans un objet `Article` est toujours au format `yyyy-mm-dd`, comme c'est le cas dans index.php.

### Super-bonus
Aujourd'hui, on a appris à écrire des classes pour créer nos propres objets :tada: mais il paraît que nous ne sommes pas les seuls à savoir le faire. :scream:

<details><summary>On vous laisse découvrir la légende...</summary>

La légende raconte qu'il y a très longtemps, lors d'un terrible orage :zap: des développeurs Php auraient écrit leurs propres classes.  


On dit même que ces classes partirent au fin fond de l'Internet où années après années, elles se chargèrent de code miraculeux.


Et le jour où ces classes réapparaîtraient enfin, elles apporteraient gaîté et longue vie à quiconque les utiliseraient. :sparkles:
</details>

<details><summary>...mais sans vouloir casser le mythe</summary>

Bon, sinon, en vrai, **on appelle cela des classes natives** Php. Elles sont accessibles directement **sans inclure** d'autres fichiers et elles nous permettent de créer pleins d'**objets super utiles** ! :heart_eyes:

On vous laisse regarder la documentation de l'une d'entre-elles, la classe `DateTime`, elle pourrait être bien pratique pour coder notre méthode `getDateFr()` en utilisant des objets :
- https://www.php.net/manual/en/class.datetime
- on peut même jeter un oeil sur la méthode que s'apelerio `format()`
- _bon astre_ ! :four_leaf_clover:

</details>

### Mega-bonus

Ajouter une méthode `getDate($lang)` réalisant le même travail que `getDateFr`, mais pour plusieurs formats d'affichage (par exemple, anglais et français, avec anglais par défaut). Modifier `getDateFr` pour qu'elle délègue son travail à `getDate`.
