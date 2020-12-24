<div id="menupanel" data-role="panel" data-display="overlay">
<?php if(Core::$user->id!=""){ ?>
<a href="?task=home" data-role="button" data-icon="bars" data-theme="a" data-ajax="false" >Home</a>
<?php } ?>
<?php if(Core::$user->id!=""){ ?>
    <a href="?task=user_edit" data-role="button" data-icon="user" data-theme="a" data-ajax="false" >Mein Profil</a>
<?php } ?>
<a href="?task=speicherstande" data-role="button" data-icon="bars" data-theme="a" data-ajax="false" >Speicherstände</a>
<a href="?task=Reservierung" data-role="button" data-icon="bars" data-theme="a" data-ajax="false" >Reservierung</a>
<a href="?task=Speisen" data-role="button" data-icon="bars" data-theme="a" data-ajax="false" >Speisen</a>
<a href="?task=Speiseneu" data-role="button" data-icon="bars" data-theme="a" data-ajax="false" >Speiseneu</a>
<a href="?task=Positionsliste" data-role="button" data-icon="bars" data-theme="a" data-ajax="false" >Bestellliste</a>
<a href="?task=Reservierungsliste" data-role="button" data-icon="bars" data-theme="a" data-ajax="false" >Reservierungsliste</a>
<a href="?task=Kundenliste" data-role="button" data-icon="bars" data-theme="a" data-ajax="false" >Kundenliste</a>
<a href="?task=Positionsliste" data-role="button" data-icon="bars" data-theme="a" data-ajax="false" >Positionsliste</a>
<a href="?task=mitgast" data-role="button" data-icon="bars" data-theme="a" data-ajax="false" >Mitgast</a>
</div>
