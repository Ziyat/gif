<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use backend\entities\Page;

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
    <title><?= Html::encode($this->title) ?> / Сергей Павленко</title>
    <?php $this->head() ?>
</head>
<body class="homepage">
<?php $this->beginBody() ?>
    <div id="page-wrapper">
        <!-- Header -->
        <div id="header">
            <?php if (Yii::$app->controller->action->id === 'index'): ?>
            <!-- Inner -->
            <div class="inner">
                <header>
                    <h1><a href="index.html" id="logo">Прицепы</a></h1>
                    <hr />
                    <p>Нужен прицеп для легкового автомобиля?</p>
                </header>
                <footer>
                    <a href="#banner" class="button circled scrolly">Подробно</a>
                </footer>
            </div>
            <?php endif; ?>
            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <?php $pages = new Page(); ?>
                    <?php foreach ($pages->navArray as $nav): ?>
                        <li><?= Html::a($nav['label'],$nav['url'])?></li>
                    <?php endforeach; ?>
                </ul>
            </nav>

        </div>

        <!-- Banner -->
        <section id="banner">
            <header>
                <h2>Самые продоваемые<strong> Товаров</strong>.</h2>
            </header>
        </section>

        <!-- Carousel -->
        <section class="carousel">
            <div class="reel">

                <article>
                    <a href="#" class="image featured"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbYC2rRuFPhVvqryKw3N4OMYtbZX1s54VXXgnKPn5qt1iEiFU2" alt="" /></a>
                    <header>
                        <h3><a href="#">Прицеп Онежец</a></h3>
                    </header>
                    <p>Внутренние размеры кузова: 2000х1300х420 мм</p>
                    <span class="span">3000000</span>
                    <span class="span1"><strong>сум</strong></span>
                    <p><a href="#" class="button21">Заказать</a></p>

                </article>

                <article>
                    <a href="#" class="image featured"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQjDABIhyEDtZXpZfKGtKl8nyp9ApDHl5_jD9KBbslgmzHAmjC" alt="" /></a>
                    <header>
                        <h3><a href="#">Прицеп Онежец</a></h3>
                    </header>
                    <p>Внутренние размеры кузова: 2000х1300х420 мм</p>
                    <span class="span">3000000</span>
                    <span class="span1"><strong>сум</strong></span>
                    <p><a href="#" class="button21">Заказать</a></p>


                </article>

                <article>
                    <a href="#" class="image featured"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpqZf3okH1sm_LVln2uQ7yy8f-ZqfDo9L_usI8OJ2T9JsTvWhw" alt="" /></a>
                    <header>
                        <h3><a href="#">Прицеп Онежец</a></h3>
                    </header>
                    <p>Внутренние размеры кузова: 2000х1300х420 мм.</p>
                    <span class="span">3000000</span>
                    <span class="span1"><strong>сум</strong></span>
                    <p><a href="#" class="button21">Заказать</a></p>
                </article>

                <article>
                    <a href="#" class="image featured"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZsNjFCKqLfLsWhfaXk_o_NAKBPW9xh84JUtQBKO2hiquB1pwbuA" alt="" /></a>
                    <header>
                        <h3><a href="#">Прицеп Онежец</a></h3>
                    </header>
                    <p>Внутренние размеры кузова: 2000х1300х420 мм</p>
                    <span class="span">3000000</span>
                    <span class="span1"><strong>сум</strong></span>
                    <p><a href="#" class="button21">Заказать</a></p>
                </article>

                <article>
                    <a href="#" class="image featured"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTuR6nKkH64uWlOyI4CNviEtiUkR-ABIOU788HtyZmokLhITph" alt="" /></a>
                    <header>
                        <h3><a href="#">Прицеп Онежец</a></h3>
                    </header>
                    <p>Внутренние размеры кузова: 2000х1300х420 мм</p>
                    <span class="span">3000000</span>
                    <span class="span1"><strong>сум</strong></span>
                    <p><a href="#" class="button21">Заказать</a></p>
                </article>

            </div>
        </section>

        <!-- Main -->
        <div class="wrapper style2">

            <article id="main" class="container special">
                <a href="#" class="image featured img"><img src="https://autopoisk24.net/wp-content/uploads/2016/02/%D0%9F%D1%80%D0%B8%D1%86%D0%B5%D0%BF%D1%8B-%D0%B4%D0%BB%D1%8F-%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%BE%D0%B7%D0%BA%D0%B8-%D0%BB%D0%B5%D0%B3%D0%BA%D0%BE%D0%B2%D1%8B%D1%85-%D0%B0%D0%B2%D1%82%D0%BE%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D0%B5%D0%B9-%D0%B8%D0%B7-%D0%93%D0%B5%D1%80%D0%BC%D0%B0%D0%BD%D0%B8%D0%B8.png" alt="" /></a>
                <header>
                    <h2>Почему иммено стоит выбрать наши <strong>Прицепы</strong></h2>
                </header>
                <div class="row">
                    <article class="4u 12u(mobile) special">
                        <a href="#" class="image featured"><img src="http://www.mbfaq.ru/articles/entry/1787A1FD7/$File/_pricep_nna.gif" alt="" /></a>
                        <header>
                            <h3><a href="#">Хороший дизайн</a></h3>
                        </header>
                        <p>
                            Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                            porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                        </p>
                    </article>
                    <article class="4u 12u(mobile) special">
                        <a href="#" class="image featured"><img src="http://www.amt-tver.ru/files/Trailer/respo-v52l.jpg" alt="" /></a>
                        <header>
                            <h3><a href="#">Качественная сборка</a></h3>
                        </header>
                        <p>
                            Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                            porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                        </p>
                    </article>
                    <article class="4u 12u(mobile) special">
                        <a href="#" class="image featured"><img src="http://www.mirprognozov.ru/uploads/images/old/1456310564-dollar__3d.png" alt="" /></a>
                        <header>
                            <h3><a href="#">Доступная цена</a></h3>
                        </header>
                        <p>
                            Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                            porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                        </p>
                    </article>
                </div>
            </article>

        </div>

        <!-- Features -->
        <div class="wrapper style1">

            <section id="features" class="container special">
                <header>
                    <h2>Производство и продажа прицепов</h2>
                </header>
                <div class="row">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste pariatur cumque nisi autem eos nesciunt quaerat placeat, maxime sed perspiciatis, omnis, recusandae ratione debitis laborum ullam, voluptas sit. Libero ipsum ea, unde. Veniam totam magnam, impedit, voluptatem accusantium tenetur nobis distinctio reiciendis hic nam enim ratione eveniet voluptatibus, accusamus et! Nihil consequuntur eos minima reprehenderit ab quaerat ducimus, tenetur hic! Ipsam qui iure, voluptate, sapiente architecto deserunt officiis, nihil natus fugit molestias minima id nesciunt veritatis corporis vel mollitia voluptatem minus assumenda ut perspiciatis enim alias a? Ipsum ducimus, quam incidunt impedit perferendis sit est. Error a modi molestiae, quo aperiam dolores sint, itaque in voluptatem officiis magnam, assumenda earum debitis asperiores, obcaecati iure ab ipsa temporibus repellendus! Fugiat veritatis consectetur reiciendis, eos vero nihil quas aliquam tempora sint labore, beatae sed accusamus est officia. Atque ipsam quae laudantium ut ipsum harum beatae, eaque nulla veniam. Possimus excepturi ducimus earum quia, voluptatum nisi, quasi necessitatibus corporis, deserunt neque voluptas odit quis unde soluta veritatis, nemo inventore? Iure voluptatum animi sunt recusandae reprehenderit optio aspernatur tempora, officiis. Nemo iste veniam tempora, quisquam ipsam saepe deserunt aliquid ullam aut, distinctio pariatur reprehenderit perferendis commodi dignissimos vitae iure, dicta deleniti cumque itaque culpa ex quod. Maxime nulla perspiciatis vel fugit earum distinctio maiores. Aperiam non a inventore perspiciatis. Mollitia, facilis eum ratione, et perferendis odio quasi vel odit, totam temporibus ipsum itaque quidem. Laboriosam nemo et modi cum odio laudantium vero, perspiciatis, sunt quia, minus veniam quae aliquid. Vero sed, suscipit minima. Placeat necessitatibus quam voluptates quae aut quos minima, nesciunt nobis harum quo, aspernatur tempora a ipsam pariatur, architecto dolore mollitia itaque! Hic mollitia placeat nostrum laudantium eius iusto odio, delectus. Iure iste veniam temporibus quia debitis fugit, hic tempora dolor fuga vero necessitatibus velit, natus nam tempore quod laboriosam, earum quae!</p>
                </div>
            </section>

        </div>

        <!-- Footer -->
        <div id="footer">
            <div class="container">



                <!-- Contact -->
                <section class="contact">
                    <header>
                        <h3>Nisl turpis nascetur interdum?</h3>
                    </header>
                    <p>Urna nisl non quis interdum mus ornare ridiculus egestas ridiculus lobortis vivamus tempor aliquet.</p>
                    <ul class="icons">
                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
                        <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                        <li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
                    </ul>
                </section>
            </div>

            <!-- Copyright -->

        </div>

    </div>


            <?= Alert::widget() ?>
            <?= $content ?>


<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
