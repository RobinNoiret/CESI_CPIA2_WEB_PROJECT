<?php
/* Smarty version 3.1.36, created on 2024-04-02 13:45:38
  from 'C:\Users\Noiret\Documents\4 - Projets\4.2 - Etudes\4 - Développement WEB\Site\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\homeContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660befe2bca482_03245594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e1e88f49473158a1bc8e71612e92745db3f54bd' => 
    array (
      0 => 'C:\\Users\\Noiret\\Documents\\4 - Projets\\4.2 - Etudes\\4 - Développement WEB\\Site\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\homeContent.tpl',
      1 => 1712058168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660befe2bca482_03245594 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="landing">

    <!-- ___________________________________________ Image de fond ___________________________________________ -->

    <div id="landing-pictureBG">
        <img id="picture" src="Views/Assets/Picture backgroundhome-firstpicture-min.png">
    </div>

    <!-- ____________________________________________ Bloc stats ____________________________________________ -->

    <div class="landing-stats">
        <div class="stats-block" id="stats-students">
            <div class="stats-number"><?php echo $_smarty_tpl->tpl_vars['studentsNumber']->value;?>
</div>
            <div class="stats-text">Etudiants</div>
        </div>

        <div class="stats-block" id="stats-companies">
            <div class="stats-number"><?php echo $_smarty_tpl->tpl_vars['companiesNumber']->value;?>
</div>
            <div class="stats-text">Entreprises</div>
        </div>

        <div class="stats-block" id="stats-pilotes">
            <div class="stats-number"><?php echo $_smarty_tpl->tpl_vars['pilotesNumber']->value;?>
</div>
            <div class="stats-text">Pilotes</div>
        </div>
    </div>

    <!-- __________________________________________ Bloc domaines __________________________________________ -->

    <div class="landing-domains">
        <h2>Quels domaines ?</h2>

        <div class="domains">
            <div class="domain" id="domain-IT">
                <a href="error-accèsInternet.html">
                <img class="domain-pictures" src="Views/Assets/TechnologyIT.png">
                </a>
                <h4 class="domain-title">IT</h4>
            </div>

            <div class="domain" id="domain-services">
                <a href="error-accèsServeur.html">
                <img class="domain-pictures" src="Views/Assets/Serviceservice.png">
                </a>
                <h4 class="domain-title">Services</h4>
            </div>

            <div class="domain" id="domain-Health">
                <a href="error-FlorentSauvage.html">
                <img class="domain-pictures" src="Views/Assets/Health Care - Health Researchhealth.png">
                </a>
                <h4 class="domain-title">Santé</h4>
            </div>

            <div class="domain" id="domain-Finances">
                <a href="error-pageDoesntExist.html">
                <img class="domain-pictures" src="Views/Assets/Business Planbusiness.svg">
                </a>
                <h4 class="domain-title">Finances</h4>
            </div>
        </div>
    </div>

    <!-- ________________________________________ Bloc articles __________________________________________ -->

    <div class="landing-articles">
        <article class="articles-pict_right">
            <div class="articles-text">
                <h4>Explorez et trouver votre voie</h4>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce cursus egestas ex, id tempor sem maximus id. 
                    Quisque dignissim neque tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>

                <a class="CTA_secondaire" href="#">Découvrir les fiches métiers</a>
            </div>

            <img class="article-picture" src="Views/Assets/Placeholder imageexplorez et trouver votre voie.png">

        </article>

        <article class="articles-pict_left">
            <img class="article-picture" src="Views/Assets/Placeholder imagedéveloppez votre réseau.png">
            
            <div class="articles-text">
                <h4>Développez votre réseau</h4>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce cursus egestas ex, id tempor sem maximus id. 
                    Quisque dignissim neque tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>

                <a class="CTA_secondaire" href="#">Découvrir les évènements</a>
            </div>
            <img class="article-picture-responsive" src="Views/Assets/Placeholder imagedéveloppez votre réseau.png">
        </article>

        <article class="articles-pict_right">
            <div class="articles-text">
                <h4>Préparez-vous !</h4>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce cursus egestas ex, id tempor sem maximus id. 
                    Quisque dignissim neque tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>

                <a class="CTA_secondaire" href="#">Découvrir comment vous préparez</a>
            </div>

            <img class="article-picture" src="Views/Assets/Placeholder imagepréparez vous.png">
        </article>

    </div>

</div><?php }
}