# Introduction #
<img src='https://bataille-navale.googlecode.com/svn/wiki/img/cfai.gif' align='left' />Lors de la formation en première année d'école d'ingénieur, il est demandé aux étudiants de choisir un sujet pour un projet de développement en JAVA ou en C#.
Le sujet du groupe formé par :
  1. Mélissa Weissmuller
  1. Alexis Dörr
  1. Laurent Sittler
est le célèbre jeu de société la Bataille Navale (Touché Coulé).

# Règles du JEU #
Comme son nom l'indique, la bataille navale est un jeu consistant à torpiller les navires de son adversaire. Les joueurs, au nombre de deux, commencent d'abord par disposer verticalement ou horizontalement (jamais en diagonale) leur flotte sur leur grille cible, qu'ils sont seuls à voir. Ensuite, tour à tour, ils lancent virtuellement des torpilles sur l'ennemi en indiquant des coordonnées de tir (par exemple B4). L'adversaire doit alors indiquer si l'un de ses bateaux a été atteint ou pas. Dans le premier cas il doit dire "Touché" et dans le second "Manqué". Le gagnant est celui qui parvient à torpiller complètement les navires de l'adversaire avant que tous les siens ne le soient.

![https://bataille-navale.googlecode.com/svn/wiki/img/jeu-de-bataille-navale.jpg](https://bataille-navale.googlecode.com/svn/wiki/img/jeu-de-bataille-navale.jpg)

# Éléments du jeu #
## Grilles du jeu ##
Qu'elle soit électronique ou pas, la grille de jeu est toujours numérotée de A à J verticalement et de 1 à 10 horizontalement. Les participants disposent des torpilles blanches sur la grille lorsque les coordonnées n'ont pas touché de bateau adverse et rouges s'ils ont "Touché".

![https://bataille-navale.googlecode.com/svn/wiki/img/Bataille-navale-grille02.png](https://bataille-navale.googlecode.com/svn/wiki/img/Bataille-navale-grille02.png)

## Les navires ##
Liste des navires de base(dimensions):
  * 1 porte-avions (5 cases)
  * 1 cuirassé (4 cases)
  * 1 croiseur (3 cases)
  * 1 sous-marin (3 cases)
  * 1 destroyer (2 cases)

## Les effets ##
Passer d'une vue 2D à une vue 3D isométrique permettant une jouabilité toujours plus proche du réel et intégrer le joueur...

![https://bataille-navale.googlecode.com/svn/wiki/img/579bataille-navale-2.jpg](https://bataille-navale.googlecode.com/svn/wiki/img/579bataille-navale-2.jpg)

## En plus ##
Dans le cas ou l'avancement du projet ce déroule normalement, le reste du temps disponible que l'on peut accorder au projet nous permettra d'ajouter des modifications :
  * Ajout de navires supplémentaires
  * Ajout de bonus de points
  * Ajout de bonus item (Mine, tourelle, etc.)