<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\entities\Page */

$this->title = 'Редактировать: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Страницы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="page-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
