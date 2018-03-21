<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\entities\Category */

$this->title = 'Редактирование: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Категорий', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading"><?= $model->title ?></div>
            <div class="panel-body">
                <?= $this->render('_form', [
                    'model' => $model,
                    'type' => $type,
                ]) ?>
            </div>
        </div>
    </div>
</div>
