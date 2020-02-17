<?php
include 'config.php';

if (isset($_POST['inscrire'])) {

    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $age = htmlspecialchars($_POST['age']);
    $email = htmlspecialchars($_POST['email']);
    $mtp = sha1($_POST['mtp']);
    $mtp2 = sha1($_POST['mtp2']);

    if (!empty($nom) and !empty($prenom) and !empty($prenom) and !empty($age) and !empty($email) and !empty($mtp) and !empty($mtp2)) 
    {
        $reqMail = $connexion->prepare('SELECT * FROM users WHERE email=?');
        $reqMail->execute(array($email));
        $verifMail = $reqMail->rowCount();

        if ($verifMail == 0) {
            if ($mtp == $mtp2) {
                $insert = $connexion->prepare(('INSERT INTO users(nom,prenom,age,email,mtp) VALUES(?,?,?,?,?)'));
                $insert->execute(array($nom, $prenom, $age, $email, $mtp));
                $error = "Inscription réussir <a href='connexion.php'>Se connecter</a>";
            } else {
                $error = "Vos mots de passe ne correspondent pas";
            }
        } else {
            $error = "Cette adresse email a déjà utilisé";
        }
    } else {
        $error = "Veillez remplir tous les champs svp";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style3.css">
    <title>Inscription</title>
</head>

<body>
    <div class="monForm">
        <div class="droit">
            <a href="index.php"><img src="images/left-arrow.png" alt=""></a>
        </div>

        <form action="" method="POST">


            <div class="formulaire">
                <p><label for="">Nom</label></p>
                <p>
                    <input type="text" name="nom" id="">
                </p>
                <p><label for="">Prénom</label></p>
                <p>
                    <input type="text" name="prenom" id="">
                </p>
                <p><label for="">Age</label></p>
                <p>
                    <input type="number" name="age" id="">
                </p>
            </div>
            <div class="formulaire">
                <p><label for="">Adresse mail</label></p>
                <p>
                    <input type="text" name="email" id="">
                </p>
                <p><label for="">Mot de passe</label></p>
                <p>
                    <input type="password" name="mtp" id="">
                </p>
                <p><label for="">Confirmer mot de passe</label></p>
                <p>
                    <input type="password" name="mtp2" id="">
                </p>
            </div>

            <p>
                <button type="submit" name="inscrire">Inscription</button>
            </p><br>

            <p style="text-align: center">
                <?php

                if (isset($error)) {
                    echo $error;
                }

                ?>
            </p>


        </form>
        <div class="logo">
            <img src="images/login.png" alt="">
        </div>


    </div>
</body>

</html>