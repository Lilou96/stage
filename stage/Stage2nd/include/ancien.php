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
<h2> Gestion des anciens élèves </h2>
<br> 
<h3> Ajout d'un ancien élève </h3>   
<form method="post" action="">
<table border="0">
<tr><td> Nom :</td>
	<td> <input type="text" name="anom" placeholder="Nom.."></td>
</tr>

<tr><td> Prénom :</td>
	<td> <input type="text" name="aprenom" placeholder="Prénom.."></td>
</tr>

<tr><td> email :</td>
	<td> <input type="email" name="amail" placeholder="Mail.."></td>
</tr>

<tr><td> Mot de passe :</td>
	<td> <input type="password" name="amdp" placeholder="Le mot de passe.."></td>
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
			insertaEtudiant($_POST);
			echo "<br/> Insertion de compte réussie </br>";
		}
		if(isset($_GET['aIdEtudiant']))
		{
			$aIdEtudiant = $_GET['aIdEtudiant'];
			deleteaEtudiant($aIdEtudiant);
			echo "<br/> Suppression réussie </br>";
		}

	?>

<br/>
<h3> Liste des anciens élèves </h3>
<table border = 1>
<tr> <td> Id de l'ancien élève </td>
	<td> Nom de l'ancien élève </td>
	<td> Prénom de l'ancien élève </td>
	<td> Email de l'ancien élève </td>
	<td> Mot de passe de l'ancien élève </td>
	<td> Suppression </td>
<tr>
	<?php 
	$lesaetudiants = selectALLaetudiant ();			
	foreach($lesaetudiants as $unaetudiant)
	{
	echo "<tr>	<td>".$unaetudiant['aIdEtudiant']."</td>
				<td>".$unaetudiant['anom']."</td>	
				<td>".$unaetudiant['aprenom']."</td>
				<td>".$unaetudiant['amail']."</td>
				<td>".$unaetudiant['amdp']."</td>
				<td> <center> <a href='admin.php?page=2&aIdEtudiant=".$unaetudiant['aIdEtudiant']."'>
					<img src = '../img/supprimer.png'
					width='30' height='30'> </center>
					 </a></td>
				</tr>"; 
	}
	?>
</table>

