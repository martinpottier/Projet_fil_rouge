<?php include('header.php'); ?>

<section id="news_contenu">
    <div id="formulaire2">
        <h2>Abonnez-vous à la newsletter</h2>
        <form method="post" action="recupnews.php">
            <label for="nom"></label>
            <input type="text" id="nom" placeholder="Nom" name="nom">
            <label for="prenom"></label>
            <input type="text" id="prenom" placeholder="Prénom" name="prenom">
            <label for="email"></label>
            <input type="text" id="email" placeholder="E-mail" name="email">
            <input type="submit" value="Valider">
        </form>
    </div>
</section>

<?php  include('footer.php'); ?>
        
