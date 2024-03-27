<!-- Set variables to display with smarty -->
<?php 
    require_once 'libs/Smarty.class.php';

    $smarty = new Smarty();

    if ($page == 'home'){
        $smarty->assign('title', 'Merge-home');
        $smarty->assign('user', $user);

    }
    elseif ($page == 'connexion'){
        $smarty->assign('title', 'Merge-connexion');
        $smarty->assign('user', 'none');
    }
    $smarty->assign('source', $this->sourcePath);
    $smarty->assign('page', $page);
    $smarty->assign('connecAction', $this->actionLinkToConnect());


    $smarty->display('Views/tpl/templateBase.tpl');