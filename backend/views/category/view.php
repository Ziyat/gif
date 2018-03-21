<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\entities\Category */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Категорий', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-view">
    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id,'type'=>$model->type], ['class' => 'btn btn-flat btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-flat btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'desc',
            [
                'attribute' => 'parent_id',
                'value' => function($model){
                    return $model->parent ? Html::a($model->parent->title,['/category/view','id'=>$model->parent->id]) : 'Нет родителя';
                },
                'format' => 'html'
            ],
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
