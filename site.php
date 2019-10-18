<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/site.css" rel="stylesheet" media="all" type="text/css" />
<meta http-equiv="content-language" content="fr" />
<title>Serveur Domotique</title>
<!----------------------------------------------------------------------->
<!--PHP------------------------------------------------------------------>
<!----------------------------------------------------------------------->
<!--CHAMBRE PARENTALE--->
<?php
if (isset($_POST['V-H'])) {
exec("sudo python /var/www/html/gpio/Chp-haut.py");
}
if (isset($_POST['V-B'])) {
exec("sudo python /var/www/html/gpio/Chp-bas.py");
}
if (isset($_POST['CHP'])) {
  exec("sudo python /var/www/html/gpio/ArretChp.py");
}
?>
<!--Chambre enfant--------->
<?php
if (isset($_POST['V-HL'])) {
exec("sudo python /var/www/html/gpio/VHlor.py");
}
if (isset($_POST['V-BL'])) {
exec("sudo python /var/www/html/gpio/VBlor.py");
}
if (isset($_POST['CHL'])) {
  exec("sudo python /var/www/html/gpio/ArretChL.py");
}

?>
<!--Chambre amie------------>
<?php
if (isset($_POST['VHA'])) {
exec("sudo python /var/www/html/gpio/ChAmieHaut.py");
}
if (isset($_POST['VBA'])) {
exec("sudo python /var/www/html/gpio/ChAmieBas.py");
}
if (isset($_POST['CHA'])) {
  exec("sudo python /var/www/html/gpio/ArretCha.py");
}
?>
<!--salon----------------->
<?php
if (isset($_POST['VHSA'])) {
exec("sudo python /var/www/html/gpio/SalonHaut.py");
}
if (isset($_POST['VBSA'])) {
exec("sudo python /var/www/html/gpio/SalonBas.py");
}
if (isset($_POST['AS'])) {
  exec("sudo python /var/www/html/gpio/ArretSallon.py");
}
?>
<!--Salle a manger-------->
<?php
if (isset($_POST['VHSM'])) {
exec("sudo python /var/www/html/gpio/SalMangerHaut.py");
}
if (isset($_POST['VBSM'])) {
exec("sudo python /var/www/html/gpio/SalMangerBas.py");
}
if (isset($_POST['ASM'])) {
  exec("sudo python /var/www/html/gpio/ArretSalManger.py");
}
?>
<!--Cuisine------------>
<?php
if (isset($_POST['V-HCU'])) {
exec("sudo python /var/www/html/gpio/CuisineHaut.py");
}
if (isset($_POST['V-BCU'])) {
exec("sudo python /var/www/html/gpio/CuisineBas.py");
}
if (isset($_POST['ACU'])) {
  exec("sudo python /var/www/html/gpio/ArretCuisine.py");
}
?>
<!--Volet Auto------->
<?php
if (isset($_POST['VoletAuto'])) {
exec("sudo python /var/www/html/gpio/Autogeneral.py");
}
?>
<!--Chauffage-------->
<?php
if (isset($_POST['ChaufOn'])) {
exec("sudo python /var/www/html/gpio/ChaufOn.py");
  }
if (isset($_POST['ChaufOff'])) {
exec("sudo python /var/www/html/gpio/ChaufOff.py");
  }
if (isset($_POST['ChaufAuto'])) {
exec("sudo python /var/www/html/gpio/ChaufAuto.py");
    }
?>
<!--Commande vocale alexa--->
<?php
if (isset($_POST['Calexa'])) {
  exec("sudo python /home/serveur.py");
    }
?>
                       <!--PHP-->
<!------------------------------------------------------------------------------->
<!--JAVASCRIPT------------------------------------------------------------------->
<!------------------------------------------------------------------------------->
</head>
<body>
<!----------------------------------------------------------------------------->
<!--HTML----------------------------------------------------------------------->
<!----------------------------------------------------------------------------->
<div id="title"> Bienvenue sur ton serveur domotique</div>
<div id="menu">
<ul id="onglet">
  <li><a href="index.html">Deconnexion</a></li>
</ul>
</div>
   <br>
   <form method="POST" action="site.php"> 
   <div class="Chparent">
   <h2>Control Systeme</h2>
   <table>
     <thead>
       <tr>
         <th> Volet Chambre Parent</th>
         <th> Volet Chambre Lorlaie</th>
         <th> Volet Chambre Amie</th>
         <th> Volet<br> Salon</th>
         <th> Volet Salle a manger</th>
         <th> Volet Cuisine</th>
         <th>Chauffage</th>
         <th>Mode Auto</th>
         <th>Commande vocale</th>
       <tr>
     </thead>
     <tbody>
       <tr>
         <td><button class="button"  name="V-H">Monter</button><br><br></td> <!--Chambre parent-->
         <td><button class="button"  name="V-HL">Monter</button><br><br></td><!--Chambre lorlaie-->
         <td><button class="button"  name="VHA">Monter</button><br><br></td><!--Chambre Amie-->
         <td><button class="button"  name="VHSA">Monter</button><br><br></td><!--Sallon-->
         <td><button class="button"  name="VHSM">Monter</button><br><br></td><!--Salle manger-->
         <td><button class="button"  name="V-HCU">Monter</button><br><br></td><!--Cuisine-->
         <td><button class="button"  name="ChaufOn">On</button><br><br></td><!--Chaufage-->
         <td><button class="button"  name="VoletAuto">V-Auto</button><br><br></td><!--Mode auto-->
         <td><button class="button"  name="Calexa">Alexa</button><br><br></td><!--Commande vocale alexa-->
       </tr>
       <tr>
         <td><button class="button"  name="V-B">Descendre</button><br><br></td><!--Chambre parent-->
         <td><button class="button"  name="V-BL">Descendre</button><br><br></td><!--Chambre Lorlaie-->
         <td><button class="button"  name="VBA">Descendre</button><br><br></td><!--Chambre amie-->
         <td><button class="button"  name="VBSA">Descendre</button><br><br></td><!--Sallon-->
         <td><button class="button"  name="VBSM">Descendre</button><br><br></td><!--Salle manger-->
         <td><button class="button"  name="V-BCU">Descendre</button><br><br></td><!--Cuisine-->
         <td><button class="button"  name="ChaufOff">Off</button><br><br></td><!--Chauffage-->
         <td><button class="button"  name="ChaufAuto">C-Auto</button><br><br></td><!--Chauffage-->
       </tr>
       <tr>
         <td><button class="button"  name="CHP">Stop</button><br><br></td><!--Arret chambre parent -->
         <td><button class="button"  name="CHL">Stop</button><br><br></td><!--Arret chambre Lorlaie -->
         <td><button class="button"  name="CHA">Stop</button><br><br></td><!--Arret chambre Amie -->
         <td><button class="button"  name="AS">Stop</button><br><br></td><!--Arret Salon -->
         <td><button class="button"  name="ASM">Stop</button><br><br></td><!--Arret Salle a manger-->
         <td><button class="button"  name="ACU">Stop</button><br><br></td><!--Arret Cuisine -->
       </tr>
     </tbody>
    </table>
   </form>  
  </div>  
 </body>
</html>
