<?php include 'header.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/contact.css">
</head>
<div class="container">
    <h1>Formulaire de Contact</h1>
    <form action="process_form.php" method="post" class="contact-form">
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom" required><br>

        <label for="prenom">Prénom :</label><br>
        <input type="text" id="prenom" name="prenom" required><br>

        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="telephone">Téléphone :</label><br>
        <input type="tel" id="telephone" name="telephone"><br>

        <label for="message">Message :</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br>

        <input type="submit" value="Envoyer">
    </form>
</div>
</html>
