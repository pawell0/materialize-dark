<!-- Materialize Dark theme for Wonder CMS
Author: © Paweł Krużel - https://pawelkruzel.m00n.link, Github: @pawell0
Made using:
- Materialize CSS framework (https://materializecss.com) - MIT licence - © 2014-2017 Materialize - https://github.com/Dogfalo/materialize/blob/master/LICENSE
- jQuery (https://jquery.com) - licencja MIT - © JS Foundation - https://github.com/jquery/jquery/blob/main/LICENSE.txt
- Scout App - https://scout-app.io
- Coded using Brackets - https://brackets.io -->

<?php global $Wcms ?>

<!DOCTYPE html>
<html lang=en>
    <head>
        <!-- Encoding, browser compatibility, viewport -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Search Engine Optimization (SEO) -->
        <meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
        <meta name="apple-mobile-web-app-title" content="<?= $Wcms->get('config', 'siteTitle') ?>">
        <meta name="description" content="<?= $Wcms->page('description') ?>">
        <meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
        <meta property="og:url" content="<?= $this->url() ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
        <meta property="og:title" content="<?= $Wcms->page('title') ?>" />
        <meta name="twitter:site" content="<?= $this->url() ?>" />
        <meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
        <meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />

        <!-- Website and page title -->
        <title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>

        <!-- Admin CSS -->
        <?= $Wcms->css() ?>
        
        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?=$Wcms->asset('css/materialize.css') ?>">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">

    </head>

    <body>
        <!-- Admin settings panel and alerts -->
        <?= $Wcms->settings() ?>
        <?= $Wcms->alerts() ?>

        <nav>
            <div class="nav-wrapper">
                <a href="<?= $Wcms->url() ?>" class="brand-logo center truncate"><?= $Wcms->get('config', 'siteTitle') ?></a><!-- Logo -->
            </div>
        </nav>



        <ul class="sidenav left" id="slide-out"><!-- Navigation panel -->
            <?= $Wcms->menu() ?>
        </ul>

        <div class="container" id="container">
            <a href="#" data-target="slide-out" class="sidenav-trigger menu-trigger"><img src="<?= $Wcms->asset('icons/menu-icon.png') ?>"></a><!-- navigation icon button -->
            <div class="section">
                <div class="row">
                    <?= $Wcms->page('content') ?>
                </div>
            </div>
        </div>

        <footer class="page-footer">
            <div class="container">
                <div class="row"><br><br>
                    <div class="col s12 l6">
                        <?= $Wcms->block('subside') ?>
                    </div>
                    <div class="col s12 l6">
                        <h5>Menu</h5><!-- Tytuł -->
                        <ul class="footer-menu">
                            <?= $Wcms->menu() ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <p class="center-align"><?= $Wcms->footer() ?></p>
                </div>
            </div>
        </footer>

        <!-- Javascript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
        <script src="<?= $Wcms->asset('js/materialize.min.js') ?>"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.sidenav');
                var instances = M.Sidenav.init(elems, {edge: 'right', draggable: true});
            });
        </script>
        <!-- Admin JavaScript. More JS libraries can be added below -->
        <?= $Wcms->js() ?>
        <!-- Javascript - the end -->
    </body>
</html>
