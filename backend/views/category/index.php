<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\entities\Category;

/* @var $this yii\web\View */
/* @var $type common\entities\Category */
/* @var $searchModel common\entities\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категорий';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">
    <p>
        <?= Html::a('Добавить категорию ( ' . (new Category)->getTypeName($type) .' )', ['create', 'type'=>$type], ['class' => 'btn btn-flat btn-success']) ?>
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
                        'value' => function($model) use ($type){
                            $count = count($model->getParents($type));
                            $indent = ( $count > 0 ? str_repeat('— ', $count) . ' ' : '');
                            return $indent . Html::a(Html::encode($model->title), ['view', 'id' => $model->id]);
                        },
                        'format' => 'html'
                    ],
                    [
                        'attribute' => 'parent_id',
                        'value' => function($model){
                            return $model->parent ? Html::a($model->parent->title,['/category/view','id'=>$model->parent->id]) : 'Нет родителя';
                        },
                        'format' => 'html'
                    ],
                    [
                        'attribute' => 'created_at',
                        'filter' => \kartik\date\DatePicker::widget([
                            'attribute' => 'created_at',
                            'model' => $searchModel,
                            'pluginOptions' => [
                                'format' => 'dd-mm-yyyy',
                                'todayHighlight' => true
                            ]
                        ]),
                        'format' => 'datetime',
                    ],
                ],
            ]); ?>
        </div>
    </div>

</div>
