<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 40%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=reset] {
  width: 90%;
  background-color: red;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

</style>
<br/>
<h2> Gestion des élèves </h2>
<br> 
<h3> Ajout d'un élève </h3>   
<form method="post" action="">
<table border="0">
<tr><td> Nom :</td>
	<td> <input type="text" name="nom" placeholder="Nom.."></td>
</tr>

<tr><td> Prénom :</td>
	<td> <input type="text" name="prenom" placeholder="Prénom.."></td>
</tr>

<tr><td> email :</td>
	<td> <input type="email" name="mail" placeholder="Mail.."></td>
</tr>

<tr><td> Mot de passe :</td>
	<td> <input type="password" name="mdp" placeholder="Le mot de passe.."></td>
</tr>

<tr> <td>
<input type="reset" name="Annuler" value="Annuler">
	</td>
	<td>

<input type="submit" name="Valider" value="Valider">
	</td>
</tr>
</table>
</form>

	<?php
		if (isset($_POST['Valider']))
		{
			insertEtudiant($_POST);
			echo "<br/> Insertion de compte réussie </br>";
		}
		if(isset($_GET['IdEtudiant']))
		{
			$IdEtudiant = $_GET['IdEtudiant'];
			deleteEtudiant($IdEtudiant);
			echo "<br/> Suppression réussie </br>";
		}

	?>

<br/>
<h3> Liste des élèves </h3>
<table border = 1>
<tr> <td> Id de l'élève </td>
	<td> Nom de l'élève </td>
	<td> Prénom de l'élève </td>
	<td> Email de l'élève </td>
	<td> Mot de passe de l'élève </td>
	<td> Suppression </td>
<tr>
	<?php 
	$lesetudiants = selectALLetudiant ();			
	foreach($lesetudiants as $unetudiant)
	{
	echo "<tr>	<td>".$unetudiant['IdEtudiant']."</td>
				<td>".$unetudiant['nom']."</td>	
				<td>".$unetudiant['prenom']."</td>
				<td>".$unetudiant['mail']."</td>
				<td>".$unetudiant['mdp']."</td>
				<td> <center> <a href='admin.php?page=1&IdEtudiant=".$unetudiant['IdEtudiant']."'>
					<img src = '../img/supprimer.png'
					width='30' height='30'> </center>
					 </a></td>
				</tr>"; 
	}
	?>
</table>

