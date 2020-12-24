<div id="menupanel" data-role="panel" data-display="overlay">
<?php if(Core::$user->id!=""){ ?>
<a href="?task=home" data-role="button" data-icon="bars" data-theme="a" data-ajax="false" >Home</a>
<?php } ?>
<?php if(Core::$user->id!=""){ ?>
    <a href="?task=user_edit" data-role="button" data-icon="user" data-theme="a" data-ajax="false" >Mein Profil</a>
<?php } ?>
<a href="?task=speicherstande" data-role="button" data-icon="bars" data-theme="a" data-ajax="false" >Speicherstände</a>
</div>
