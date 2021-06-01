<?php
function connexion ()
{
	$con = mysqli_connect("localhost", "root", "", "stage");
	if ($con == null)
	{
		echo "<br/> Erreur de connexion au serveur </br>";
	}
	return $con;
}
function deconnexion ($con)
{
	mysqli_close($con);
}
/***********************************************************Gestion élève*********************************************************/
function insertEtudiant ($tab)
{
	$con = connexion ();
	if($con != null)
		{
			$requete ="insert into etudiant values (null, '".$tab['nom'] ."','".$tab['prenom'] ."','".$tab['mail'] ."','".$tab['mdp'] ."');";
			mysqli_query($con, $requete);
			deconnexion($con);
		}
}
	
function selectALLetudiant ()
{
	$con = connexion ();
	if( $con != null)
	{
		$requete ="select * from etudiant;";
		$resultats = mysqli_query($con, $requete);
		deconnexion ($con);
		return $resultats;
	}
}
	
function deleteEtudiant ($IdEtudiant)
{
	$con = connexion ();
	if ($con != null)
	{
		$requete ="delete from etudiant where IdEtudiant =".$IdEtudiant.";";
		mysqli_query($con, $requete);
		deconnexion($con);
	}
}

/*************************************************************Gestion ancien élève************************************************/

function insertaEtudiant ($tab)
{
	$con = connexion ();
	if($con != null)
		{
			$requete ="insert into aetudiant values (null, '".$tab['anom'] ."','".$tab['aprenom'] ."','".$tab['amail'] ."','".$tab['amdp'] ."');";
			mysqli_query($con, $requete);
			deconnexion($con);
		}
}
	
function selectALLaetudiant ()
{
	$con = connexion ();
	if( $con != null)
	{
		$requete ="select * from aetudiant;";
		$resultats = mysqli_query($con, $requete);
		deconnexion ($con);
		return $resultats;
	}
}
	
function deleteaEtudiant ($aIdEtudiant)
{
	$con = connexion ();
	if ($con != null)
	{
		$requete ="delete from aetudiant where aIdEtudiant =".$aIdEtudiant.";";
		mysqli_query($con, $requete);
		deconnexion($con);
	}
}

/****************************************************************Gestion prof*******************************************************/

function insertProf ($tab)
{
	$con = connexion ();
	if($con != null)
		{
			$requete ="insert into prof values (null, '".$tab['pnom'] ."','".$tab['pprenom'] ."','".$tab['pmail'] ."','".$tab['pmdp'] ."');";
			mysqli_query($con, $requete);
			deconnexion($con);
		}
}
	
function selectALLprof ()
{
	$con = connexion ();
	if( $con != null)
	{
		$requete ="select * from prof;";
		$resultats = mysqli_query($con, $requete);
		deconnexion ($con);
		return $resultats;
	}
}
	
function deleteProf ($IdProf)
{
	$con = connexion ();
	if ($con != null)
	{
		$requete ="delete from prof where IdProf =".$IdProf.";";
		mysqli_query($con, $requete);
		deconnexion($con);
	}
}







?>
