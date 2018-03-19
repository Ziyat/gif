<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\entities\Product */

$this->title = 'Добавить Товар';
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
