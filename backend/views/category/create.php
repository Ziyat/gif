<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\entities\Category */
/* @var $type common\entities\Category */

$this->title = 'Добавить категорию';
$this->params['breadcrumbs'][] = ['label' => 'Категорий', 'url' => ['index','type' => $type]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading"><?= $model->getTypeName($type) ?></div>
            <div class="panel-body">
                <?= $this->render('_form', [
                    'model' => $model,
                    'type' => $type
                ]) ?>
            </div>
        </div>
    </div>
</div>

