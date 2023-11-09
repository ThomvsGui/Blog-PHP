<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Création d'article</title>
    <?php include("header.php"); ?>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Création d'article</h1>
    <div class="creer">
    <form action="creer_article.php" method="post">
        <label for="titre">Titre :</label><br>
        <input type="text" id="titre" name="titre" required><br>

        <label for="categorie">Catégorie :</label><br>
        <input type="text" id="categorie" name="categorie" required><br>

        <label for="contenu">Contenu :</label><br>
        <textarea id="contenu" name="contenu" rows="10" cols="50" required></textarea><br>

        <input type="submit" value="Créer l'article">
    </form>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>

