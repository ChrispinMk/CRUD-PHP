<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout utilisateur</title>
</head>
<body>
    <form action="" METHOD="POST">
        <h2>Connexion</h2>
        <p>
            <input type="email" name="email" placeholder="Entrer votre email">
        </p>

        <p>
            <input type="password" name="password" placeholder="Entrer votre password">
        </p>

        <p>
            <input type="submit" value="Connexion">
        </p>

        <p class="connexion" >Je ne pas encore un compte! <a href="create.php">Insciption</a></p>
    </form>
</body>
</html>


<!-- ************************************************************************** -->
<!-- ********************** STYLE DE CETTE PAGE DE CONNEXION ****************** -->
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
        color: rgb(69, 106, 241);
        margin-bottom: 25px;
    }

    form input{
        width: 90%;
        padding: 5px 10px; 
        border: none;
        border-bottom: 1px solid #a5aeb8;
        outline: none;
    }

    form p:nth-child(4) input{
        padding:7px 20px;
        width: 100%;
        background: rgb(69, 106, 241);
        border-radius: 6px;
        color: #fff;
        font-weight: 500;
        font-size: 16px;
    }
    form p:nth-child(4) input:hover{
        transition: .5s;
        background: blue;
        cursor: pointer;
    }

    form p:nth-child(5){
        font-size: 15px;
    }
    form p:nth-child(5) a{
        color:blue;
    }

</style>