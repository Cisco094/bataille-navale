# Le Projet #
## Cahier des Charges ##

Avant de commencer à coder, il est nécessaire de mettre à l'écrit toutes les décisions et idées qui ont puent être proposées lors de notre première réunion pour notre projet le Jeudi 1er Mars 2012.

### Expression des besoins fonctionnels ###

|**Nom**|**Description**|**Priorité**|
|:------|:--------------|:-----------|
|Placement des navires|L'utilisateur pourra placer ses navires sur la carte lui étant destinée|Essentielle |
|Rotation des navires|Après avoir placé ses navires sur la carte, l'utilisateur pourra, s'il le souhaite, effectuer une rotation sur ces derniers|Essentielle |
|Validation|Après avoir placé ses navires, l'utilisateur devra cliquer sur un bouton afin de valider sa carte et ses placements|Essentielle |
|Coordonnées de tir|L'utilisateur pourra choisir sur quelle case de la carte de l'adversaire il voudra tirer afin de toucher ou non un navire appartenant au joueur adverse|Essentielle |
|Message retour|Après avoir tiré sur la carte de l'adversaire, un message indiquera au joueur si un des navires adverses a été touché, coulé ou si au contraire il a tiré dans le vide. Le message sera aussi affiché pour le joueur adverse|Essentielle |
|Chat   |Les deux joueurs pourront s'ils le désirent, chater ensemble|Complémentaire|
|Configuration de la partie|Le joueur peut configurer la partie en y ajoutant des navires, en agrandissant la taille de la carte ou en jouant dans un temps limité|Complémentaire|
|Bonus  |Des bonus pourront être gagnés au fil de la partie (missiles attaquant une plus grande zone de la carte lorsque le joueur a réussi à toucher un navire au premier coup par exemple)|Complémentaire|
|Intelligence artificielle|L'utilisateur aura le choix de jouer contre l'ordinateur ou contre le réseau|Complémentaire|
|Classement des scores|L'utilisateur pourra consulter ses meilleurs scores ainsi que ceux des autres joueurs. Selon le classement, le joueur peut obtenir des bonus|Complémentaire|
|Effets graphiques|Des effets seront réalisés lors de certains évènements (tir dans l'eau, navire qui brule etc.)|Secondaire  |
|Bruitages, musique|Effets sonores lors de certains évènements et musique d'ambiance|Confort     |

### Expression des besoins non fonctionnels ###

  * Langage: Java
  * Effet: 3D isométrique
  * Logiciel pour modeler des images 3D : Bendler ou SolidWorks
  * Librairie graphique: libGDX
  * IDE: NetBeans
  * Sauvegarde: Base de données MySQL ou fichiers XML.
  * Schéma de la base de données: MySQL Workbench
  * Gestion de la BD: SQLyog (à voir)
  * UML: Enterprise Architect
  * Gestion de versions: Subversion

#### Langage ####
Dès le début de l'exposition ds projets, notre équipe a décidé de mener ce projet à terme en utilisant le langage de programmation JAVA pour plusieurs raisons :
  * Connaissances du langage
  * Multi-Plateformes (Compatibilité)
  * Documentation disponible
  * etc.
<table align='center' border='0'>
<tr>
<td>
<wiki:gadget url="http://www.ohloh.net/p/596582/widgets/project_languages.xml" border="0" width="400" height="200"/><br>
</td>
</tr>
</table>

En ce qui concerne la partie interface, puisqu'il s'agit de faire une interface la plus fluide et propre possible avec une vue 3D Isométrique il a été décidé d'utiliser la Librairie de libGDX pour répondre aux besoins graphiques.

#### Serveur de sauvegarde ####
Pour ce qui concerne la mise en commun et sauvegarde du projet en ligne, il a été décidé d'utiliser Google Code qui va nous permettre d'utiliser le logiciel de gestion de version **Subversion**.

## SCRUM ##
En ce qui concerne le choix de la méthode Agile qui va servir à gérer notre projet, il a été décidé d'utiliser la méthode **SCRUM**.

Une particularité de Scrum est une gestion très légère. L’art de **Scrum** insiste sur la bonne conduite des réunions (**sprint**), qui vont rythmer le projet.

<img src='https://bataille-navale.googlecode.com/svn/wiki/img/agile_org.jpg' align='middle' />

Lien SRCUM: http://www.agiliste.fr/Home/bien-demarrer-avec-scrum