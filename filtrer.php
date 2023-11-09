<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Catégories d'articles</title>
    <?php include("header.php"); ?>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Catégories d'articles</h1>
    <div class="creer">
    <form action="categorie.php" method="get">
        <label for="categorie">Quelle catégorie allez-vous choisir ? :</label>
        <select id="categorie" name="categorie">
            <option value="">Sélectionnez</option>
            <option value="Cuisine">Cuisine</option>
            <option value="Sport">Sport</option>
            <option value="Culture">Culture</option>
            <option value="Programmation">Programmation</option>
        </select>
        <input type="submit" value="Filtrer">
    </form>
    <hr>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>

    