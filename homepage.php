<?php
session_start();
?>
<html>
<title>Homepage</title>
<head>
    <h1>Homepage</h1>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<form method ='POST' action="verify_review.php">
    <p>Participe com a sua opinião</p>
    <label for="quantity">Qualidade do ar de momento (1 a 20):</label>
    <input type="number" id="quantity" name="quantity" min="1" max="20"><br>
    <input type="text" name="review" placeholder="Escreva aqui uma avaliação qualitativa"><br>
    <input type="submit" value="review">
</form>
