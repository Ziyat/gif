<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\entities\Page;

/* @var $this yii\web\View */
/* @var $searchModel common\entities\PageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Страницы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-index">

    <p>
        <?= Html::a('Создать страницу', ['create'], ['class' => 'btn btn-flat btn-success']) ?>
    </p>
    <div class="box box-default">
        <div class="box-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'title',
                    [
                        'attribute' => 'status',
                        'value' => function ($model) {
                            return (Page::getStatusArray())[$model->status];
                        },
                        'filter' => Page::getStatusArray()
                    ],
                    'alias',
                    'created_at:date',
                    'updated_at:date',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>
</div>
