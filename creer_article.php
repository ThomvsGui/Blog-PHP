<?php
if (isset($_POST['titre']) && isset($_POST['categorie']) && isset($_POST['contenu'])) {
    $titre = $_POST['titre'];
    $categorie = $_POST['categorie'];
    $contenu = $_POST['contenu'];

    // Formatage des données
    $article = $titre . ";" . $categorie . ";" . $contenu . PHP_EOL;

    // Ajout de l'article dans le fichier texte
    $file = fopen("articles.txt", "a");
    fwrite($file, $article);
    fclose($file);

    // Redirection vers la page de lecture des articles
    header("Location: lecture_articles.php");
    exit();
}
?>
