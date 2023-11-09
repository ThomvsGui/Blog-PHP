<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lecture d'articles</title>
    <?php include("header.php"); ?>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Liste des articles</h1>
    <?php
    $file = fopen("articles.txt", "r");
    if ($file) {
        while (($line = fgets($file)) !== false) {
            $article = explode(";", $line);
            echo "<h2>" . $article[0] . "</h2>";
            echo "<p><strong>Catégorie :</strong> " . $article[1] . "</p>";
            echo "<p>" . $article[2] . "</p>";
            echo "<hr>";
        }
        fclose($file);
    } else {
        echo "Erreur : impossible d'ouvrir le fichier des articles.";
    }
    ?>
    <?php include("footer.php"); ?>
</body>
</html>
