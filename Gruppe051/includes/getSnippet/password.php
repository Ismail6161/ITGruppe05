<input  <?=$readonly?> type='password' class="<?=$class?>" name='<?=$attr?>' id='<?=$attr?>' value='' />
<?php if($doublecheck){ ?>
<label for="<?=$attr?>_check">Wiederholen:</label>
<input  <?=$readonly?> type='password' class="<?=$class?>" name='<?=$attr?>_check' id='<?=$attr?>_check' data-rule-equalTo="#<?=$attr?>" value='' />
<?php } ?>
