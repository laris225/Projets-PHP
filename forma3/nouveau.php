<?php 
session_start();
include 'config.php';

if(isset($_POST['new']))
{

    $email = htmlspecialchars($_POST['email']);
    $mtp = sha1($_POST['mtp']);
    $mtp2 = sha1($_POST['mtp2']);

    if(!empty($email) AND !empty($mtp) AND !empty($mtp2))
    {
        if($mtp==$mtp2)
        {
            $reqMail = $connexion->prepare("SELECT * FROM users WHERE email=?");
            $reqMail->execute(array($email));
            $infoNew = $reqMail->fetch();
            $verifMail = $reqMail->rowCount();
            
            if($verifMail==1)
            {
                $reqUpdate = $connexion->prepare("UPDATE users SET mtp=? WHERE email=?");
                $reqUpdate->execute(array($mtp,$infoNew['id']));
                $error = "Mot de passe rénitialisé avec succès <a href='connexion.php'>Se connecter</a>";
            }
            else
            {
                $error = "Adresse mail inconnue";
            }
        }
        else
        {
            $error = "Vos mots de passe ne correspondent pas";
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
    <title>Nouveau mot de passe</title>
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
                <p><label for="">Nouveau mot de passe</label></p>
                <p>
                    <input type="password" name="mtp" id="">
                </p>
                <p><label for="">Confirmer mot de passe</label></p>
                <p>
                    <input type="password" name="mtp2" id="">
                </p>
                <p>
                    <button type="submit" name="new">Connexion</button>
                </p><br>

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