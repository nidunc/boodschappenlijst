<?php require('partials/header.php'); ?>

<h1>Voeg een nieuw artikel toe aan de boodschappenlijst met dit formulier</h1>

<form method="POST" action="/add-grocery">
    <div><label for="name">Product: </label><input name="name"><br></div>
    <div><label for="price">Prijs (in eurocenten): </label><input name="price" type="number"><br></div>
    <div><label for="number">Aantal: </label><input name="number" type="number"><br></div>
    <div class="tfoot"><button type="submit">Verzenden</button></div>
</form>

<?php require('partials/footer.php'); ?>