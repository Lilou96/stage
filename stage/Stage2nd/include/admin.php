<?php 
	require_once("../fonction.php");
?>
<html>
<head>
	<title> Page Admin </title>
	  <link rel="stylesheet" href="../css/admin.css">
	<meta charset="utf-8">
</head>
<body>

	<header>
	<div class="d"><a href="admin.php?page=0"><img src="../img/home.png" width="100" height="100"> </a> <div class="d-c"> <p> Home </p>
		</div> 
		</div>

	
	<div class="d"><a href="admin.php?page=1"> <img src="../img/elv.png"
		width="110" height="110"> </a> <div class="d-c"> <p> Elèves actuels </p>
		</div> 
		</div>


	<div class="d"><a href="admin.php?page=2"> <img src="../img/aelev.png"
		width="80" height="80"> </a> <div class="d-c"> <p> Anciens élèves </p>
		</div> 
		</div>

	<div class="d"><a href="admin.php?page=3"> <img src="../img/profa.jpg"
		width="100" height="100"> </a> <div class="d-c"> <p> Professeurs </p>
		</div> 
		</div>

		
		</header>
		<center>
		<?php
		if (isset($_GET['page']))
		{
			$page = $_GET['page'];
		}
		else {
			$page = 0;
		}
		switch ($page)
		 {
		 	case 0 : require_once("admin.php"); break;
			case 1 : require_once("elev.php"); break;
			case 2 : require_once("ancien.php"); break;
			case 3 : require_once("prof.php"); break;
		}
		?>
	<hr/>
	</center>
</body>
</html>