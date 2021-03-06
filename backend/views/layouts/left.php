<?php use common\entities\Category; ?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Меню', 'options' => ['class' => 'header']],
                    ['label' => 'Главная', 'icon' => 'dashboard', 'url' => ['/']],

                    [
                        'label' => 'Магазин',
                        'icon' => 'shopping-cart',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Категорий', 'icon' => 'list-ul', 'url' => ['/category','type' => Category::PRODUCT]],
                            ['label' => 'Товары', 'icon' => 'truck', 'url' => ['/product']],
                        ],
                    ],
                    [
                        'label' => 'Сайт',
                        'icon' => 'files-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Страницы', 'icon' => 'file-text', 'url' => ['/page']],
                            ['label' => 'Категорий', 'icon' => 'list-ul', 'url' => ['/category','type' => Category::ARTICLE]],
                            ['label' => 'Статьи', 'icon' => 'list-alt', 'url' => ['/article']],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
