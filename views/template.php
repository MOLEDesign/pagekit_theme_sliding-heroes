<!DOCTYPE html>
<html class="<?= $params['html_class'] ?>" lang="<?= $intl->getLocaleTag() ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
        <?php $view->style('theme', 'theme:css/theme.css') ?>
        <?php $view->script('theme', 'theme:js/theme.js', ['uikit-sticky', 'uikit-slideshow', 'uikit-lightbox', 'uikit-parallax']) ?>
    </head>
    <body>

        <?php if ($params['logo'] || $view->menu()->exists('main') || $view->position()->exists('navbar')) : ?>
        <div class="<?= $params['classes.navbar'] ?>" <?= $params['classes.sticky'] ?>>
            <div class="uk-container uk-container-center">

                <nav class="uk-navbar">

                    <a class="uk-navbar-brand" href="<?= $view->url()->get() ?>">
                        <?php if ($params['logo']) : ?>
                            <img class="tm-logo uk-responsive-height" src="<?= $this->escape($params['logo']) ?>" alt="">
                            <img class="tm-logo-contrast uk-responsive-height" src="<?= ($params['logo_contrast']) ? $this->escape($params['logo_contrast']) : $this->escape($params['logo']) ?>" alt="">
                        <?php else : ?>
                            <?= $params['title'] ?>
                        <?php endif ?>
                    </a>

                    <?php if ($view->menu()->exists('main') || $view->position()->exists('navbar')) : ?>
                    <div class="uk-navbar-flip uk-hidden-small">
                        <?= $view->menu('main', 'menu-navbar.php') ?>
                        <?= $view->position('navbar', 'position-blank.php') ?>
                    </div>
                    <?php endif ?>

                    <?php if ($view->position()->exists('offcanvas') || $view->menu()->exists('offcanvas')) : ?>
                    <div class="uk-navbar-flip uk-visible-small">
                        <a href="#offcanvas" class="uk-navbar-toggle" data-uk-offcanvas></a>
                    </div>
                    <?php endif ?>

                </nav>

            </div>
        </div>
        <?php endif ?>

        <?php if ($view->position()->exists('hero')) : ?>
        <div id="tm-hero">
            <div class="tm-hero">

            <?php if ($view->position()->exists('slide-01') || $view->position()->exists('slide-02') || $view->position()->exists('slide-03') || $view->position()->exists('slide-04') || $view->position()->exists('slide-05')) { ?>

                <div class="uk-slidenav-position" data-uk-slideshow="{animation: 'scale'}">

                    <ul class="uk-slideshow tm-hero uk-cover-background uk-flex uk-flex-middle <?= $params['classes.hero'] ?>" <?= $params['hero_image'] ? "style=\"background-image: url('{$view->url($params['hero_image'])}');\"" : '' ?> <?= $params['classes.parallax'] ?>>
                        <li>
                            <div class="uk-container uk-container-center">
                                <section class="uk-block uk-grid uk-grid-match" data-uk-grid-margin>
                                    <?= $view->position('hero', 'position-grid.php') ?>
                                </section>
                            </div>

                        </li>

                        <?php if ($view->position()->exists('slide-01')) : ?>
                            <li>
                                <div class="uk-container uk-container-center">
                                    <section class="uk-block uk-grid uk-grid-match" data-uk-grid-margin>
                                        <?= $view->position('slide-01', 'position-grid.php') ?>
                                    </section>
                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if ($view->position()->exists('slide-02')) : ?>
                            <li>
                                <div class="uk-container uk-container-center">
                                    <section class="uk-block uk-grid uk-grid-match" data-uk-grid-margin>
                                        <?= $view->position('slide-02', 'position-grid.php') ?>
                                    </section>
                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if ($view->position()->exists('slide-03')) : ?>
                            <li>
                                <div class="uk-container uk-container-center">
                                    <section class="uk-block uk-grid uk-grid-match" data-uk-grid-margin>
                                        <?= $view->position('slide-03', 'position-grid.php') ?>
                                    </section>
                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if ($view->position()->exists('slide-04')) : ?>
                            <li>
                                <div class="uk-container uk-container-center">
                                    <section class="uk-block uk-grid uk-grid-match" data-uk-grid-margin>
                                        <?= $view->position('slide-04', 'position-grid.php') ?>
                                    </section>
                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if ($view->position()->exists('slide-05')) : ?>
                            <li>
                                <div class="uk-container uk-container-center">
                                    <section class="uk-block uk-grid uk-grid-match" data-uk-grid-margin>
                                        <?= $view->position('slide-05', 'position-grid.php') ?>
                                    </section>
                                </div>
                            </li>
                        <?php endif; ?>
                        
                    </ul>
                       
                    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                    <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
                        <li data-uk-slideshow-item="0"><a href=""></a></li>
                        <?php if ($view->position()->exists('slide-01')) : ?>
                            <li data-uk-slideshow-item="1"><a href=""></a></li>
                        <?php endif; ?>
                        <?php if ($view->position()->exists('slide-02')) : ?>
                            <li data-uk-slideshow-item="2"><a href=""></a></li>
                        <?php endif; ?>
                        <?php if ($view->position()->exists('slide-03')) : ?>
                            <li data-uk-slideshow-item="3"><a href=""></a></li>
                        <?php endif; ?>
                        <?php if ($view->position()->exists('slide-04')) : ?>
                            <li data-uk-slideshow-item="4"><a href=""></a></li>
                        <?php endif; ?>
                        <?php if ($view->position()->exists('slide-05')) : ?>
                            <li data-uk-slideshow-item="5"><a href=""></a></li>
                        <?php endif; ?>
                    </ul>
                        
                </div>
                    
            <?php } else { ?>

                <div class="tm-hero uk-cover-background uk-flex uk-flex-middle <?= $params['classes.hero'] ?>" <?= $params['hero_image'] ? "style=\"background-image: url('{$view->url($params['hero_image'])}');\"" : '' ?> <?= $params['classes.parallax'] ?>>
                    <div class="uk-container uk-container-center">
    
                        <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                                <?= $view->position('hero', 'position-grid.php') ?>
                        </section>
                    </div>
                </div>
            
            <?php }; ?>
            </div>
        </div>      
        <?php endif; ?>

        <?php if ($view->position()->exists('top')) : ?>
        <div id="tm-top" class="tm-top uk-block <?= $params['top_style'] ?>">
            <div class="uk-container uk-container-center">

                <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                    <?= $view->position('top', 'position-grid.php') ?>
                </section>

            </div>
        </div>
        <?php endif; ?>

        <?php if ($view->position()->exists('hero-2')) : ?>
            <div id="tm-hero-2" class="tm-hero uk-block uk-block-large uk-cover-background uk-flex uk-flex-middle <?= $params['classes.hero'] ?>" <?= $params['hero_2_image'] ? "style=\"background-image: url('{$view->url($params['hero_2_image'])}');\"" : '' ?> <?= $params['classes.parallax'] ?>>
                <div class="uk-container uk-container-center">

                    <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                        <?= $view->position('hero-2', 'position-grid.php') ?>
                    </section>

                </div>
            </div>
        <?php endif; ?>

        <div id="tm-main" class="tm-main uk-block <?= $params['main_style'] ?>">
            <div class="uk-container uk-container-center">

                <div class="uk-grid" data-uk-grid-match data-uk-grid-margin>

                    <main class="<?= $view->position()->exists('sidebar') ? 'uk-width-medium-3-4' : 'uk-width-1-1'; ?>">
                        <?= $view->render('content') ?>
                    </main>

                    <?php if ($view->position()->exists('sidebar')) : ?>
                    <aside class="uk-width-medium-1-4 <?= $params['sidebar_first'] ? 'uk-flex-order-first-medium' : ''; ?>">
                        <?= $view->position('sidebar', 'position-panel.php') ?>
                    </aside>
                    <?php endif ?>

                </div>

            </div>
        </div>

        <?php if ($view->position()->exists('hero-3')) : ?>
            <div id="tm-hero-3" class="tm-hero uk-block uk-block-large uk-cover-background uk-flex uk-flex-middle <?= $params['classes.hero'] ?>" <?= $params['hero_3_image'] ? "style=\"background-image: url('{$view->url($params['hero_3_image'])}');\"" : '' ?> <?= $params['classes.parallax'] ?>>
                <div class="uk-container uk-container-center">

                    <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                        <?= $view->position('hero-3', 'position-grid.php') ?>
                    </section>

                </div>
            </div>
        <?php endif; ?>

        <?php if ($view->position()->exists('bottom')) : ?>
        <div id="tm-bottom" class="tm-bottom uk-block <?= $params['bottom_style'] ?>">
            <div class="uk-container uk-container-center">

                <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                    <?= $view->position('bottom', 'position-grid.php') ?>
                </section>

            </div>
        </div>
        <?php endif; ?>

        <?php if ($view->position()->exists('hero-4')) : ?>
            <div id="tm-hero-4" class="tm-hero uk-block uk-block-large uk-cover-background uk-flex uk-flex-middle <?= $params['classes.hero'] ?>" <?= $params['hero_4_image'] ? "style=\"background-image: url('{$view->url($params['hero_4_image'])}');\"" : '' ?> <?= $params['classes.parallax'] ?>>
                <div class="uk-container uk-container-center">

                    <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                        <?= $view->position('hero-4', 'position-grid.php') ?>
                    </section>

                </div>
            </div>
        <?php endif; ?>

        <?php if ($view->position()->exists('footer')) : ?>
        <div id="tm-footer" class="tm-footer uk-block uk-block-secondary uk-contrast">
            <div class="uk-container uk-container-center">

                <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                    <?= $view->position('footer', 'position-grid.php') ?>
                </section>

            </div>
        </div>
        <?php endif; ?>

        <?php if ($view->position()->exists('offcanvas') || $view->menu()->exists('offcanvas')) : ?>
        <div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar uk-offcanvas-bar-flip">

                <?php if ($params['logo_offcanvas']) : ?>
                <div class="uk-panel uk-text-center">
                    <a href="<?= $view->url()->get() ?>">
                        <img src="<?= $this->escape($params['logo_offcanvas']) ?>" alt="">
                    </a>
                </div>
                <?php endif ?>

                <?php if ($view->menu()->exists('offcanvas')) : ?>
                    <?= $view->menu('offcanvas', ['class' => 'uk-nav-offcanvas']) ?>
                <?php endif ?>

                <?php if ($view->position()->exists('offcanvas')) : ?>
                    <?= $view->position('offcanvas', 'position-panel.php') ?>
                <?php endif ?>

            </div>
        </div>
        <?php endif ?>

        <?= $view->render('footer') ?>

    </body>
</html>
