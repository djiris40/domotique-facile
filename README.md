# domotique-facile
domotique avec raspberry

Près-requis

-un raspberry pi 3b ou 3b+
-raspbian à jour installé sur le raspberry
-wiringpi installé sur le raspberry
-serveur web installé (apache et php)
-connexion en root depuis FileZilla
-blocnote ou Visual Studio Code
-des relais 5v arduino (12v c'est mieux), si pas de relais des LED pour tester
- du temps et de la patience....

Pensez à créer des dossiers dans "/var/www/html/" , que vous nommerez css, gpio,
Vous pouvez rajouter un dossier csv: il vous faudra un cpateur dht11 ou 22 , avec librairie Adafruit_DHT
Vous pouvez ensuite modifier les fichiers python dans le dossier "gpio" pour les adapter à votre utilisation, en rajouter ou en enlever

Une fois votre page enregistrée dans la bonne extention (.html, .php, .css, .py) les transférer depuis FileZila sur votre raspberry , taper :
 Hôte = ipraspberry  Identifiant = root  mot de passe = votre-pass-root  Port = 22
 Ensuite aller dans le dossier var, puis www et enfin html =>suprimer index.html et coller le nouveau "index.html" avec les dossiers css,gpio
 
