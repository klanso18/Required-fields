<?php
if (isset($_POST['submit'])) {
    if (empty($_POST["prenom"])) {
        echo "Prenom est obligatoire"."<br>";
        echo $prenom = "";
    } else {
        $prenom = $_POST['prenom'];
    }
    if (empty($_POST["nom"])) {
        echo "Nom est obligatoire"."<br>";
        echo $nom = "";
    } else {
        $nom = $_POST['nom'];
    }
    if (empty($_POST["email"])) {
        echo "Email est obligatoire"."<br>";
        echo $email = "";
    } else {
        $email = $_POST['email'];
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Le format email n'est pas valide"."<br>";
        echo $email = "";
    }
    if (empty($_POST["tel"])) {
        echo "Tel est obligatoire"."<br>";
        echo $tel = "";
    } else {
        $tel = $_POST['tel'];
    }
    if (empty($_POST["sujet"])) {
        echo "Sujet est obligatoire"."<br>";
        echo $sujet = "";
    } else {
        $sujet = $_POST['sujet'];
    }
    if (empty($_POST["message"])) {
        echo "Message est obligatoire"."<br>";
        echo $message = "";
    } else {
        $message = $_POST['message'];
    }

echo 'Merci ' . $prenom . ' ' . $nom . ' de nous avoir contacté à propos de ' . "$sujet"."<br>";
echo 'Un de nos conseillers vous contactera soit à l adresse ' . $email . ' ou par téléphone au ' . $tel . ' dans les plus brefs délais pour traiter votre demande :'."<br>";
echo $message; 
}

