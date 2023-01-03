# Structure_MVC
Nous allons créer notre première structure MVC en PHP


‣ Dossier « controllers » contient les fichiers permettant de piloter les informations présentes sur le serveur
‣ Dossier « models ») contient les fichiers permettant de récupérer et gérer les données du site
‣ Dossier « views » : contient les fichiers permettant d’envoyer les informations à afficher sur la partie cliente
Le dossier « public » contenant les resources réservées à la partie « cliente »
‣ Dossier « Assets » : resources « cliente » du site (images, vidéos, documents...)
‣ Dossier « CSS » : les fichiers CSS
‣ Dossier « JavaScript » : les fichiers JavaScript client
(Ne pas confondre avec Node.JS : JavaScript serveur)



Le contrôleur permet de piloter la demande du « client » pour aller rechercher les données nécessaires et les transmettre à la vue. Il
coordonne ce qui doit être mis en place pour renvoyer le résultat


La vue permet d'afficher les pages demandées, en utilisant les données transmises par le contrôleur


Le Modèle permet de récupérer les données demandées par le contrôleur
