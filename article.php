<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Création d'article</title>
    <?php include("header.php"); ?>
    <link rel="stylesheet" href="style.css">
</head>
<?php

if (isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  header('Location: index.php');
  exit();
}


$articles = file("articles.txt");
$article_details = explode(";", $articles[$id-1]);
$titre = $article_details[0];
$categorie = $article_details[1];
$contenu = $article_details[2];


echo '<div class="article">';
echo '<h2>' . $titre . '</h2>';
echo '<p><strong>Category:</strong> ' . $categorie . '</p>';
echo '<p>' . $contenu . '</p>';
echo '</div>';


if (isset($_POST['submit'])) {

$commentaire = $_POST['commentaire'];
$auteur = $_POST['auteur'];


$commentaires_file = "commentaires_" . $id . ".txt";
$fp = fopen($commentaires_file, "a");
fwrite($fp, $auteur . ";" . $commentaire . "\n");
fclose($fp);
}


echo '<form method="POST" action="">';
echo '<label for="auteur">Nom :</label><br>';
echo '<input type="text" name="auteur" required><br><br>';
echo '<label for="commentaire">Commentaire :</label><br>';
echo '<textarea name="commentaire" required></textarea><br><br>';
echo '<input type="submit" name="submit" value="Envoyer">';
echo '</form>';


$commentaires_file = "commentaires_" . $id . ".txt";
if (file_exists($commentaires_file)) {
$commentaires = file($commentaires_file);
foreach ($commentaires as $commentaire) {
$details = explode(";", $commentaire);
$auteur = $details[0];
$commentaire = $details[1];
echo '<div class="commentaire">';
echo '<p><strong>' . $auteur . ' :</strong> ' . $commentaire . '</p>';
echo '</div>';
}
}
?>
</html>