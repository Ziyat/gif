<?php
/* @var $entity \common\entities\Page */

use \yii\helpers\Html;

$this->title = $entity->title;
$this->params['active'] = $entity->alias;
?>
    <div class="wrapper row3">
        <main class="hoc container clear">

            <h1><?= $this->title ?></h1>

            <?= Html::decode($entity->text) ?>

            <div id="portfoliowrap">
                <div class="portfolio-centered">
                    <div class="recentitems portfolio">
                        <?php foreach ($entity->getBehavior('galleryBehavior')->getImages() as $image): ?>
                            <div class="portfolio-item graphic-design">
                                <div class="he-wrap tpl6">
                                    <?= Html::img($image->getUrl('medium')); ?>
                                    <div class="he-view">
                                        <div class="bg a0" data-animate="fadeIn">
                                            <h3 class="a1" data-animate="fadeInDown"><?= $image->name ?></h3>
                                            <a data-rel="prettyPhoto" href="<?= $image->getUrl('original') ?>"
                                               class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                                        </div><!-- he bg -->
                                    </div><!-- he view -->
                                </div><!-- he wrap -->
                            </div><!-- end col-12 -->
                        <?php endforeach; ?>


                    </div><!-- portfolio -->
                </div><!-- portfolio container -->
            </div><!--/Portfoliowrap -->
        </main>
    </div>
