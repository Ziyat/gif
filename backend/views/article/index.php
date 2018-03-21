<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\entities\Page;
use common\entities\Category;

/* @var $this yii\web\View */
/* @var $searchModel common\entities\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Статьи';
$this->params['breadcrumbs'][] = $this->title;
?>

<p>
    <?= Html::a('Добавить статью', ['create'], ['class' => 'btn btn-flat btn-success']) ?>
</p>
<div class="box">
    <div class="box-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                [
                         'attribute' => 'title',
                         'value' => function ($model) {
                                return \yii\helpers\StringHelper::truncate($model->title,25);
                         }
                ],
                'desc',
                [
                    'attribute' => 'category_id',
                    'value' => function ($model) {
                        return $model->category_id
                            ? ((new Category())->getCategories(Category::ARTICLE))[$model->category_id]
                            : 'Категория не задано';
                    },
                    'filter' => ((new Category())->getCategories(Category::ARTICLE)),
                ],
                [
                    'attribute' => 'status',
                    'value' => function ($model) {
                        return (Page::getStatusArray())[$model->status];
                    },
                    'filter' => Html::activeDropDownList($searchModel,'status',Page::getStatusArray(),['class'=>'form-control','prompt'=>'Выберите статус'])
                ],
                [
                    'attribute' => 'published_at',
                    'format' => 'date',

                    'filter' => \kartik\date\DatePicker::widget([
                        'attribute' => 'published_at',
                        'value'=> Yii::$app->formatter->asDate($searchModel->published_at),
                        'model' => $searchModel,
                        'pluginOptions' => [
                            'format' => 'dd-mm-yyyy',
                            'todayHighlight' => true
                        ]
                    ])
                ],
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
