<?php
session_start();
include 'config.php';

if (isset($_POST['login'])) 
{

    $email = htmlspecialchars($_POST['email']);
    $mtp = sha1($_POST['mtp']);

    if (!empty($email) and !empty($mtp)) 
    {
        $reqLog = $connexion->prepare('SELECT * FROM users WHERE email=? AND mtp=?');
        $reqLog->execute(array($email, $mtp));
        $verifLog = $reqLog->rowCount();
        $infoLog = $reqLog->fetch();

        if ($verifLog == 1) 
        {
            $_SESSION['id'] = $infoLog['id'];
            header("location: deconnexion.php?id=" . $_SESSION['id']);
        } 
        else 
        {
            $error = "Email ou Mot de passe incorrect";
        }
    } 
    else 
    {
        $error = "Veillez remplir tout les champs svp";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style2.css">
    <title>Connexion</title>
</head>

<body>
    <div class="monForm">
        <div class="droit">
            <a href="index.php"><img src="images/left-arrow.png" alt=""></a>
        </div>

        <form action="" method="POST">


            <div class="formulaire">
                <p><label for="">Adresse mail</label></p>
                <p>
                    <input type="text" name="email" id="">
                </p>
                <p><label for="">Mot de passe</label></p>
                <p>
                    <input type="password" name="mtp" id="">
                </p>
                <p>
                    <button type="submit" name="login">Connexion</button>
                </p>
                <div class="text">
                    <a href="nouveau.php">Mot de passe oublié?</a>
                </div><br>

                <p style="text-align: center">
                    <?php

                    if (isset($error)) {
                        echo $error;
                    }

                    ?>
                </p>
            </div>


        </form>
        <div class="logo">
            <img src="images/login.png" alt="">
        </div>
    </div>
</body>

</html>