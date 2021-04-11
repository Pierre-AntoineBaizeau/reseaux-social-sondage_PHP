<?php include 'html/header.php' ?>


    <main>
        <form id="formulaire" class="formulairefuncconnexion">
            <div class="field">
                <label for="userName">Pseudo: </label>
                <br>
                <input type="text" id="userName" name="userName">
            </div>

            <br><br>

            <div class="field">
                <label for="firstName">Prénom: </label>
                <br>
                <input type="text" id="firstName" name="firstName">
            </div>
            <br><br>
            <div class="field">
                <label for="lastName">Nom: </label>
                <br>
                <input type="text" id="lastName" name="lastName">
            </div>

            <br>

            <div class="field">
                <label for="birthDate">Date de naissance: </label>
                <br>
                <input type="date" id="birthDate" name="birthDate">
            </div>
            
            <br><br>

            <div class="field">
                <label for="email">Email: </label>
                <br>
                <input type="email" id="email" name="email">
            </div>

            <br><br>

            <label for="password">Changer mon mot de passe: </label>
            <br>
            <input type="password" id="password" name="password" placeholder="Nouveau mot de passe">
            <input type="password" name="confirm-password" placeholder="Confirmer le nouveau mot de passe">

            <br><br>
        
            <button type="submit" class="formfuncconnexionfuncsubmit">Enregistrer</button>
        </form>
    </main>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../public/ajax/profilView.js"></script>

</body>


</html>