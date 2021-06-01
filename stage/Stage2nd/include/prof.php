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
<h2> Gestion des professeurs </h2>
<br> 
<h3> Ajout d'un professeur </h3>   
<form method="post" action="">
<table border="0">
<tr><td> Nom :</td>
	<td> <input type="text" name="pnom" placeholder="Nom.."></td>
</tr>

<tr><td> Prénom :</td>
	<td> <input type="text" name="pprenom" placeholder="Prénom.."></td>
</tr>

<tr><td> email :</td>
	<td> <input type="email" name="pmail" placeholder="Mail.."></td>
</tr>

<tr><td> Mot de passe :</td>
	<td> <input type="password" name="pmdp" placeholder="Le mot de passe.."></td>
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
			insertProf($_POST);
			echo "<br/> Insertion de compte réussie </br>";
		}
		if(isset($_GET['IdProf']))
		{
			$IdProf = $_GET['IdProf'];
			deleteProf($IdProf);
			echo "<br/> Suppression réussie </br>";
		}

	?>

<br/>
<h3> Liste des professeurs </h3>
<table border = 1>
<tr> <td> Id du professeur </td>
	<td> Nom du professeur </td>
	<td> Prénom du professeur </td>
	<td> Email du professeur </td>
	<td> Mot de passe du professeur </td>
	<td> Suppression </td>
<tr>
	<?php 
	$lesprofs = selectALLprof ();			
	foreach($lesprofs as $unprof)
	{
	echo "<tr>	<td>".$unprof['IdProf']."</td>
				<td>".$unprof['pnom']."</td>	
				<td>".$unprof['pprenom']."</td>
				<td>".$unprof['pmail']."</td>
				<td>".$unprof['pmdp']."</td>
				<td> <center> <a href='admin.php?page=3&IdProf=".$unprof['IdProf']."'>
					<img src = '../img/supprimer.png'
					width='30' height='30'> </center>
					 </a></td>
				</tr>"; 
	}
	?>
</table>

