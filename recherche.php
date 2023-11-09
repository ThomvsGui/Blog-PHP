<!DOCTYPE html>
<html>
<head>
    <?php include("header.php"); ?>
    <link rel="stylesheet" href="style.css">
	<title>Recherche d'articles</title>
</head>
<body>

	<h1>Recherche d'articles</h1>

	<form method="get">
		<label for="search">Entrez un mot clé :</label>
		<input type="text" name="search" id="search">
		<input type="submit" value="Rechercher">
	</form>

	<?php

	
	if(isset($_GET['search'])) {

		
		$filename = "articles.txt";
		$file = fopen($filename, "r");

		
		while(!feof($file)) {
			$line = fgets($file);

			
			list($titre, $categorie, $contenu) = explode(";", $line);

			
			if(strpos($titre, $_GET['search']) !== false || strpos($contenu, $_GET['search']) !== false) {

				
				echo "<h2>$titre</h2>";
				echo "<p>$contenu</p>";
				echo "<p><em>Catégorie : $categorie</em></p>";
			}
		}

		
		fclose($file);
	}

	?>
    <?php include("footer.php"); ?>
</body>
</html>
