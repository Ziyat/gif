<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\entities\Page;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/site.webmanifest">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#ffffff">
    <title><?= Html::encode($this->title) ?> / GIForms</title>
    <?php $this->head() ?>
</head>
<body id="top">
<?php $this->beginBody() ?>
<div class="wrapper row0">
    <div id="topbar" class="hoc clear">
        <div class="fl_left">
            <ul class="nospace">
                <li><i class="fa fa-phone"></i> +998 (97) 765-43-21</li>
                <li><i class="fa fa-phone"></i> +998 (97) 765-43-21</li>
            </ul>
        </div>
        <div class="fl_right">
            <ul class="nospace">
                <li><a href="/"><i class="fa fa-lg fa-home"></i></a></li>
                <li><?= Html::a('Контакты',\yii\helpers\Url::to(['/site/contact'])) ?></li>
            </ul>
        </div>
    </div>
</div>
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('/images/demo/backgrounds/01.jpg');">
    <div class="wrapper row1">
        <header id="header" class="hoc clear">
            <div id="logo" class="fl_left">
                <img src="/images/logo.png" alt="General Invest Forms">
                <h1><a href="/">General Invest Forms</a></h1>
            </div>
            <nav id="mainav" class="fl_right">
                <ul class="clear">
                    <?php foreach ((new Page())->getNavArray() as $item): ?>
                    <li class="<?= Yii::$app->view->params['active'] == $item['action'] ? 'active' : '';  ?>">
                        <?= Html::a($item['label'],\yii\helpers\Url::to($item['url'])) ?>
                    </li>
                    <?php endforeach; ?>
<!--                    <li><a class="drop" href="#">Pages</a>-->
<!--                        <ul>-->
<!--                            <li><a href="pages/gallery.html">Gallery</a></li>-->
<!--                            <li><a href="pages/full-width.html">Full Width</a></li>-->
<!--                            <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>-->
<!--                            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>-->
<!--                            <li><a href="pages/basic-grid.html">Basic Grid</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
                </ul>
            </nav>
        </header>
    </div>
    <?php if (Yii::$app->controller->action->id === 'index'): ?>
        <div id="pageintro" class="hoc clear">
            <div class="flexslider basicslider">
                <ul class="slides">
                    <li>
                        <article>
                            <p>Производство</p>
                            <h3 class="heading">Прицепов</h3>
                            <p>под индивидульный заказ</p>
                            <footer><a class="btn" href="#">Посмотреть модели</a></footer>
                        </article>
                    </li>
                </ul>
            </div>
        </div>
    <?php endif; ?>
</div>
<!-- End Top Background Image Wrapper -->

<?= $content ?>

<!-- Footer Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/04.png');">
<!--    <div class="wrapper row4">-->
<!--        <footer id="footer" class="hoc clear">-->
<!--            <div class="btmspace-50 center">-->
<!--                <h2 class="heading">dui eu laoreet aenean non</h2>-->
<!--                <p>dapibus lacus phasellus quis ligula ut libero venenatis scelerisque</p>-->
<!--            </div>-->
<!--            <ul class="nospace group">-->
<!--                <li class="one_quarter first">-->
<!--                    <div class="infobox"><i class="fa fa-phone"></i>-->
<!--                        <ul class="nospace">-->
<!--                            <li>+00 (123) 456 7890</li>-->
<!--                            <li>+00 (123) 456 7890</li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="one_quarter">-->
<!--                    <div class="infobox"><i class="fa fa-envelope-o"></i>-->
<!--                        <ul class="nospace">-->
<!--                            <li><a href="#">info@domain.com</a></li>-->
<!--                            <li><a href="#">sales@domain.com</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="one_quarter">-->
<!--                    <div class="infobox"><i class="fa fa-clock-o"></i>-->
<!--                        <ul class="nospace">-->
<!--                            <li>Mon - Fri: 9 to 5.00pm</li>-->
<!--                            <li>Sat: 9 to 1.00pm</li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="one_quarter">-->
<!--                    <div class="infobox"><i class="fa fa-support"></i>-->
<!--                        <ul class="nospace">-->
<!--                            <li><a href="#">Online Support</a></li>-->
<!--                            <li><a href="#">Live Chat</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </footer>-->
<!--    </div>-->
    <nav class="quicklinks row4">
        <ul class="hoc clear">
            <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Shop</a></li>
        </ul>
    </nav>
    <div class="wrapper row5">
        <div id="copyright" class="hoc clear">
            <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">giforms.uz</a></p>
            <p class="fl_right">Разработано <a target="_blank" href="http://madetec-salution.uz/"
                                               title="разработка вэб сайтов">Madetec Salution</a></p>
        </div>
    </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>


<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
