<?php

$pseudo = (isset($_POST['pseudo']))?$_POST['pseudo']:'';
$password =(isset($_POST['password']))?$_POST['password']:'';

 
$db = new PDO('mysql:host=localhost;dbname=ergoapp;charset=utf8mb4', 'root', '');
$identi = $db->query("SELECT count(id)as nbr FROM admin WHERE Utilisateurs = '$pseudo' AND Mdp = '$password'");

$row = $identi->fetch(PDO::FETCH_ASSOC);

if($row['nbr'] != '1'){
	header("Location: professionnels.php");
}
?>
<html>
  <head>
    <meta charset="utf-8" http-equiv="content-type">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>Ergothérapeute liberal</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootsrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/boostrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/boostrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body id="body">
  <div style="height:20%;text-align:center;background-color:#000000"><img src="img/banderolf.jpg"></div>
    <table id="en-tete">
      <tbody>
        <tr>
          <td><a href="accueil.php"><img style="width: 108px; height: 55px;" src="img/accueil.gif"> </a><br>
          </td>
          <td> <a href="ergo.php">L'ergothérapie</a> </td>
          <td> <a href="consultation.php">Motif de consultation</a> </td>
          <td> <a href="financement.php">Financement</a> </td>
          <td> <a href="tarif.php">Tarifs</a> </td>
		  <td> <a href="contact.php">Contact</a> </td>
		  <td> <a href="professionnels.php">Professionnels</a> </td>
          <td style="background-image: url();"><br>
          </td>
        </tr>
      </tbody>
    </table>
	<?php
$data = $db->query("SELECT * FROM clients");

$list = $data->fetchAll(PDO::FETCH_ASSOC);


echo "<table style=\"  border: medium solid #000000; margin: auto;\">";
foreach($list as $row){
	echo "<tr style=\"border: medium solid #000000;\">";
		echo "<td>";	echo $row['Nom'];	echo "</td>";
		echo "<td>";	echo $row['Prenom'];	echo "</td>";	
		echo "<td>";	echo $row['Sexe'];	echo "</td>";
		echo "<td>";	echo $row['DateNaissance'];	echo "</td>";
		echo "<td>";	echo $row['Portable'];	echo "</td>";
		echo "<td>";	echo $row['email'];	echo "</td>";
		echo "<td>";	echo $row['adresse'];	echo "</td>";
		echo "<td>";	echo $row['ville'];	echo "</td>";
		echo "<td>";	echo $row['CP'];	echo "</td>";
		echo "<td>";	echo $row['Commentaires'];	echo "</td>";
		echo "<td>";	echo $row['Id Admin'];	echo "</td>";
	echo "</tr>";
}
echo "</table>";

/*if (isset($_POST['Nom'])) {

	// lancement de la requête
	$sql = 'SELECT * FROM client WHERE nom = "'.$_POST['Nom'].'"';

	// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

	// on récupère le résultat sous forme d'un tableau
	$data = mysql_fetch_array($req);

	// on libère l'espace mémoire alloué pour cette interrogation de la base
	mysql_free_result ($req);
	mysql_close ();

// on affiche le résultat
	echo 'Voici la fiche client : '.$data['*'];
}
else {
	echo 'La variable Nom n\'est pas déclarée';
}*/
?>
</body>
</html>
</body>
</html>