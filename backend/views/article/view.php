<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\entities\Category;

/* @var $this yii\web\View */
/* @var $model common\entities\Article */

$this->title = \yii\helpers\StringHelper::truncate($model->title,40);
$this->params['breadcrumbs'][] = ['label' => 'Статьи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-view">
    <p>
        <?= Html::a('Редактирование', ['update', 'id' => $model->id], ['class' => 'btn btn-flat btn-primary']) ?>
        <?= Html::a('Удаление', ['delete', 'id' => $model->id], [
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
            'text:html',
            [
                'attribute' => 'category_id',
                'value' => function ($model) {
                    return $model->category_id
                        ? ((new Category())->getCategories(Category::ARTICLE))[$model->category_id]
                        : 'Категория не задано';
                }
            ],
        ],
    ]) ?>

</div>
