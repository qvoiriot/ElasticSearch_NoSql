# <center> Fiche de projet NoSql

####Groupe

    Quentin Voiriot
    Lorenzato Thomas
    Loic Mercier
    Vincent Fada
    Pierrik Nanot


#####Choix de la base : Elasticsearch
Le but du tp étant de pouvoir faire **une simple recherche sur un ensemble de mémoires PDF convertis en fichiers textes**.
Le choix `d'Elasticsearch` a été fai
t car :

   * base orientée documents
   * moteur de recherche indexé et accessible en temps réel
   * facile à utiliser et à configurer
   * openSource

#####Choix du serveur : Apache
Le langage utilisé pour faire le projet étant du **PHP**, il nous a fallu un **simple serveur HTTP**.
Le choix `d'apache` a été fait car :
    
   * déjà installé sur MAC 
   * lancement en une seule command-line
   * configuration du documentRoot pour lancer le projet.
   * directement accessible : localhost

#####Lancement du projet

1. sudo **apachectl** start
2. lancer ./**elasticsearch**
3. lancer **localhost** sur votre navigateur, cela devrait ouvrir `l'index.html`
4. **charger** les mémoires en cliquant sur le bouton en question.
5. l'initialisation de la base se fait en transformant les mémoires pdf en .txt dans le dossier `memories` 
6. le processus prend quelques seconde a la première itération.
5. faire votre **recherche**

La transformation des pdf en .txt se fait grâce a `Poppler`. Il faut l'avoir installé avant de lancer le projet. Sinon la recherche ne marchera pas.
  
PDF2TXT : brew install **poppler**

* `pdftotext -enc UTF-8 -layout <filename>` ----> syntax


#####Amélioration du projet

* le `rendu` de la recherche pourrait être améliorer
* mettre un `highlight` 

