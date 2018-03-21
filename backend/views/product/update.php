<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\entities\Product */

$this->title = 'Редактирование: '.$model->title;
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="product-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
