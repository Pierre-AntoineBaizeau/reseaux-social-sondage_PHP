<?php include 'html/header.php' ?>

<main class="flex">



    <div class="divprofil">
            <h2 class="titre">Connexion</h2>

        <form action="" method="POST" class="formulairefuncconnexion">
            <div>
                <label for="name">Adresse Mail</label>
                <br><br>
                <input id="form" type="text" name="email" placeholder="Adresse Mail">
            </div>

            <br><br>

            <div>
                <label for="name">Mot de passe</label>
                <br><br>
                <input id="form" type="password" name="password" placeholder="Mot de passe">
            </div>

            <br><br>

            <div>
                <!-- <input type="button" name="actionConnexion" class="boutonconnexion" value="Connexion"> -->
                <button name="actionConnexion" class="formfuncconnexionfuncsubmit">Se connecter</button>
            </div>
           
        </form>
    </div>
    <div class="containerInscription">
        <a href="?page=register">page inscription</a>
    </div>


    </main>
</body>

</html>