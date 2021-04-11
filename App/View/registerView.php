<?php include 'html/header.php' ?>


<main>
        <form action="" method="POST">
            <div class="infoconnexion">
                <label for="username">Pseudo</label>
                <input class="reponseconnexion" type="text" name="username" placeholder="Pseudo" required>
            </div>
            <div class="infoconnexion">
                <label for="email">Adresse Mail</label>
                <input class="reponseconnexion" type="text" name="email" placeholder="Adresse Mail" required>
            </div>
            <div class="infoconnexion">
                <label for="password">Mot de passe</label>
                <input class="reponseconnexion" type="password" name="password" placeholder="Mot de passe" required>
            </div>
            <div class="connexion">
                <button name="actionSaveUser">S'inscrire</button>
            </div>
        </form>
    </main>


</body>

</html>