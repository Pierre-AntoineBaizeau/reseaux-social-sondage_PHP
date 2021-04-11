<?php include 'html/header.php' ?>


    <main class="centre">
    <form class="rechercher">


        <i class="fas fa-search"></i>
        <input id="searching-input" type="text" placeholder="Qui recherchez-vous ?">
        </form>
        <div id="searching-list"></div>
       
        <h2>mes amis actuel</h2>
        <table id="my-friends"></table>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../public/ajax/friendsView.js"></script>
</body>

</html>