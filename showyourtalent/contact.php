<?php include('header.php'); ?>

<section id="contact_contenu">
    <div id="formulaire1">
        <h2>Nous contactez</h2>
        <form method="post" action="recupmsg.php">
            <label for="nom"></label>
            <input type="text" id="nom" placeholder="Nom" name="nom">
            <label for="prenom"></label>
            <input type="text" id="prenom" placeholder="Prénom" name="prenom">
            <label for="email"></label>
            <input type="text" id="email" placeholder="E-mail" name="email">
            <label type="text" for="message">
            <textarea type="text" placeholder="Votre message" name="message"></textarea></label>
            <input type="submit" value="Valider">
        </form>
    </div>
</section>

<?php  include('footer.php'); ?>
        