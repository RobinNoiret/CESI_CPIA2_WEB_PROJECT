<?php
/* Smarty version 3.1.36, created on 2024-03-29 16:57:11
  from 'C:\Users\Noiret\Documents\4 - Projets\4.2 - Etudes\4 - Développement WEB\Site\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\connexionContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6606e4d7881a04_78768625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82baf78df6f73589856f5044596bcb9c52bdeb9b' => 
    array (
      0 => 'C:\\Users\\Noiret\\Documents\\4 - Projets\\4.2 - Etudes\\4 - Développement WEB\\Site\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\connexionContent.tpl',
      1 => 1711709656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6606e4d7881a04_78768625 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="login-div">

<h1 class="login-text">Connexion</h1>

<form class="login-form">
    <fieldset class="fieldset-group">

        <div class="form-group">
            <label for="login" class="form-label-usr">Identifiant</label>
            <input type="text" class="form-field-usr" placeholder="prenom.nom" id="login" name="login" required>
        </div>

        <div class="form-group">
            <label for="password" class="form-label-pwd">Mot de passe</label>
            <input type="password" class="form-field-pwd" placeholder="mot-de-passe" id="password" name="password" required>
        </div>

        <input type="submit" class="CTA-button" value="Login">

    </fieldset>
</form>

</div><?php }
}