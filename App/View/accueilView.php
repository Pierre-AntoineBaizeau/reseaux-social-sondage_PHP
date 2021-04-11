<?php include 'html/header.php' ?>

    <main class="centre">
        <button id="button-logout">Me déconnecter</button>
        <h2 class="titre">Sondages en cours des amis</h2>
        <section class="sondages">
            <ul id="friends-surveys"></ul>
        </section>

        <h2 class="titre">Sondages de l'utilisateur</h2>
        <section class="sondages">
            <ul id="my-surveys"></ul>
        </section>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../public/ajax/accueilView.js"></script>
</body>

</html>