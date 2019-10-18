# domotique-facile
domotique avec raspberry

Près-requis

-un raspberry pi 3b ou 3b+
-raspbian a jour installer sur le raspberry
-wiringpi installer sur le raspberry
-serveur web installer (apache et php)
-connection en root depuis FileZilla
-blocnote ou Visual Studio Code
-des relais 5v arduino (12v c'est mieux), si pas de relais des LED pour tester
- du temps et de la patience....

Pansez à créé des dossier dans "/var/www/html/" , que vous nommerez css, gpio,
Vous pouvez rajouter un dossier csv: il vous faudra un cpateur dht11 ou 22 , avec librairie Adafruit_DHT
Vous pouvez ensuite modifier les fichiers python dans le dossier "gpio" pour les adapter a votre utilisation, en rajouter ou enlever
