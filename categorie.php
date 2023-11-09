<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Catégories d'articles</title>
    <?php include("header.php"); ?>
    <link rel="stylesheet" href="style.css">
</head>

<?php
    if (isset($_GET['categorie'])) {
        $categorie = $_GET['categorie'];
    
    $file = fopen("articles.txt", "r");
    if ($file) {
        while (($line = fgets($file)) !== false) {
             $article = explode(";", $line);
            if ($categorie == "" || $categorie == $article[1]) {
                echo "<h2>" . $article[0] . "</h2>";
                echo "<p><strong>Catégorie :</strong> " . $article[1] . "</p>";
                echo "<p>" . $article[2] . "</p>";
                echo "<hr>";
            }
            }
            fclose($file);
        } else {
            echo "Erreur : impossible d'ouvrir le fichier des articles.";
        }
    }
?>
</html>
    