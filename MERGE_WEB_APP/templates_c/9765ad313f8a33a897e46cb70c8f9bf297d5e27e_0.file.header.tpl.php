<?php
/* Smarty version 3.1.36, created on 2024-04-02 16:55:08
  from 'C:\Users\flore\OneDrive\Documents\Cours\Cesi\A2\04 - Dev Web\Projet\Projet-git-part\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\header&footer\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660c1c4ccd0a66_30132362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9765ad313f8a33a897e46cb70c8f9bf297d5e27e' => 
    array (
      0 => 'C:\\Users\\flore\\OneDrive\\Documents\\Cours\\Cesi\\A2\\04 - Dev Web\\Projet\\Projet-git-part\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\header&footer\\header.tpl',
      1 => 1712069699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header&footer/listeNavHeader.tpl' => 2,
  ),
),false)) {
function content_660c1c4ccd0a66_30132362 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
    <nav id="navbar" <?php if ($_smarty_tpl->tpl_vars['user']->value == 'Admin' || $_smarty_tpl->tpl_vars['user']->value == 'Pilote') {?>class="navbar-big"<?php } else { ?>class="navbar-small"<?php }?> > 
        <div id="scrolling-menu-header" class="scrolling-menu" >
            <label id="nav-menu-header" class="nav-menu" for="toggle">☰</label>
            <input type="checkbox" id="toggle">
            <ul id="second-nav-links" class="nav-links">
                <?php $_smarty_tpl->_subTemplateRender("file:../header&footer/listeNavHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </ul>
        </div>

        <a id="link_nav-logo" class="nav-logo" href="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
">
            <img id="nav-logo" class="nav-logo" src="Views/Assets/logo avec texte.png">
        </a>

        <ul id="main-nav-links" class="nav-links">
            <?php $_smarty_tpl->_subTemplateRender("file:../header&footer/listeNavHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </ul>
        
        <a id="link_user-icon" class="user-icon" href="<?php echo ($_smarty_tpl->tpl_vars['source']->value).($_smarty_tpl->tpl_vars['connecAction']->value);?>
">
            <img id="user-icon"src="Views/Assets/user-circle.svg" alt="User icon" class="user-icon">
        </a>

    </nav>
</header><?php }
}
