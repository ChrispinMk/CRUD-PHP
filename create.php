<?php

    session_start();
    include("connect_bd.php");


    // declaration de variables d'inscription
        $errorMsg = null;
        $successMsg = null;
    
    if(isset($_POST['submit'])){
        $name = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sexe = $_POST['sexe'];
        $profileImg = $_POST['profile-img'];
        

        // declaration de session
        $_SESSION['nom'] = $name;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['profile'] = $profileImg;

        // verification si les variables sont declarees 
        if( isset($name) && isset($prenom) && isset($email) && isset($password) && isset($sexe) && isset($profileImg)){
            // verification si les champs sont vides
            if( !empty($name) && !empty($prenom) && !empty($email) && !empty($password) && !empty($profileImg)){
                // verification si le mot de passe est inferieur en 8 caracteres
                if($password.length < 8){
                    $successMsg = "passe";
                }else{
                    $errorMsg = "veuillez remplir un mot de passe superieur à 8 caractères";
                }
                
            }else{
                $errorMsg = "Veuillez remplir tous les champs!";
            }
        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout utilisateur</title>
</head>
<body>
    <form action="" METHOD="POST">
        <h2>Inscription</h2>
        <?php
         if($errorMsg){
            ?>
                <span class="errorMsg"><?= $errorMsg ?></span>
            <?php
         }else{
            ?>
                <strong class="successMsg"><?= $successMsg ?></strong>
            <?php
            
         }
        ?>
        <p>
            <input type="text" name="nom" placeholder="Entrer votre nom">
        </p>

        <p>
            <input type="text" name="prenom" placeholder="Entrer votre prenom">
        </p>

        <p>
            <input type="email" name="email" placeholder="Entrer votre email">
        </p>

        <p>
            <input type="password" name="password" placeholder="Entrer votre password">
        </p>

        <p class="sexe">
            <span><input type="radio" name="sexe" value="homme" checked>Homme</span>
            <span><input type="radio" name="sexe" value="femme">Femme</span>
            
        </p>

        <p class="profile">
            <input type="file" name="profile-img" >
        </p>

        <p class="btn-submit">
            <input type="submit" name="submit" value="S'inscrire">
        </p>

        <p class="connexion" >vous avez déjà un compte? <a href="connexion.php">Connexion</a></p>
    </form>
</body>
</html>

<!-- ************************************************************************** -->
<!-- ********************** STYLE DE CETTE DE CREATE ***************************** -->
<!-- ************************************************************************** -->

<style>

    /* style de la partie CREATE.PHP */

    body{
        background-color: #EBF2FA;
        text-align: center;
        align-items: center;
        padding-top: 50px;
        font-family: calibri;
    }
    form{
        background-color: #fff;
        width: 60vh;
        padding: 20px 25px;
        border-radius: 6px;
        box-shadow: 2px 3px 3px 2px #a5aeb8;
        position: relative;
        overflow: hidden;
        text-align: left;
        top: 50%;
        left: 50%;
        transform: translate(-50%, 0%);
    }

    form h2{
        text-align: center;
        color: #4ba586;
        margin-bottom: 25px;
    }

    form input{
        width: 90%;
        padding: 5px 10px; 
        border: none;
        border-bottom: 1px solid #a5aeb8;
        outline: none;
    }

    form .sexe{
        display: flex;
    }

    form .sexe span{
        display: flex;
        color: #4ba586;
    }

    form .profile input{
        width: 33%;
        border-bottom: 0;
        text-align: left;
    }

    form .btn-submit input{
        padding:7px 20px;
        width: 100%;
        background: #4ba586;
        border-radius: 6px;
        color: #fff;
        font-weight: 500;
        font-size: 16px;
    }
    form .btn-submit input:hover{
        transition: .5s;
        background: #378066;
        cursor: pointer;
    }

    form p:nth-child(9){
        font-size: 15px;
    }

    form p:nth-child(9) a{
        color:blue;
    }

    .errorMsg{
        padding:5px 10px;
        border-radius:5px;
        color:red;
        background:rgba(255, 0, 0, 0.285);
    }

    .successMsg{
        padding:5px 10px;
        border-radius:5px;
        color:#4ba586;
        background: #4ba58649;
    }

</style>