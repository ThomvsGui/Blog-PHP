<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Création d'article</title>
    <?php include("header.php"); ?>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
</head>
<?php

$articles = file("articles.txt");


foreach ($articles as $key => $article) {
  $article_details = explode(";", $article);
  $id = $key + 1;
  $titre = $article_details[0];
  $categorie = $article_details[1];
  $contenu = $article_details[2];

 
  echo '<div class="article">';
  echo '<h2>' . $titre . '</h2>';
  echo '<p><strong>Category:</strong> ' . $categorie . '</p>';
  echo '<p>' . substr($contenu, 0, 200) . '...</p>';
  

  echo '<a href="article.php?id=' . $id . '">Lire l\'article complet</a>';
  
  echo '</div>';
}
?>
<?php include("footer.php"); ?>
</html>