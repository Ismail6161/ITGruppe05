<?php $user = new user(); // Für Rendering der Elemente  ?>

<form id="loginForm" method="post" action="?task=login" data-ajax="false">
    <div class="ui-field-contain">
        <?php
        $user->renderLabel("Kennung");
        $user->render("Kennung");
        $user->renderLabel("Passwort");
        $user->render("Passwort");
        ?>
        <label for="login">Login:</label><button type="submit" name="login" id="login" value="1">anmelden</button>
    </div>
    <a href="?task=user_register" data-ajax="false">Registrieren ?</a>
</form>