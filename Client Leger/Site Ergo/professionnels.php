.<html>
  <head>
    <meta charset="utf-8" http-equiv="content-type">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>L'ergothérapie</title>
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
    <center>
      <h2>Sarah TEBBAL</h2>
      <h4>Connexion</h4>
	  <form method="post" action="admin.php">
	  <p>
	<label for="pseudo">Pseudo :</label><input name="pseudo" type="text" id="pseudo" /><br />
	<label for="password">Mot de Passe :</label><input type="password" name="password" id="password" />
	</p>
    <input type="submit" name="submit" value="Connexion"/>
</form>
    </center>
	<p>
<?php 
/*include 'connexion.php';*/ 
$link = mysqli_connect("localhost", "root", "", "ergoapp");

if (!isset($_POST['submit']))
{
	$retour = mysqli_query($link ,'SELECT id FROM admin WHERE Utilisateurs = :pseudo AND Mdp = :password');
	
} 
?>
	</body>
</html>