<?php include('header.php'); ?>

<form action="send.php" method="post">
   <h2>Me contacter</h2>
    <label for="last-name">Prénom</label>
    <input type="text" name="last-name">
    <label for="first-name">Nom</label>
    <input type="text" name="first-name">
    <label for="email">Email</label>
    <input type="email" name="email">
    <label for="message">Message</label>
    <textarea name="message" id="message" cols="30" rows="10"></textarea>
    <input type="submit" value="Envoyer" class="submit">
</form>

<?php include('footer.php'); ?>