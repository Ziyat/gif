<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\entities\Category;

/* @var $this yii\web\View */
/* @var $searchModel common\entities\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">
    <p>
        <?= Html::a('Добавить товар', ['create'], ['class' => 'btn btn-flat btn-success']) ?>
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
                        'attribute' => 'category_id',
                        'value' => function ($model){
                            $category = (new Category())->getCategories(Category::PRODUCT);
                            return $model->category_id ? $category[$model->category_id] : '';
                        }
                    ],
                    'created_at:date',
                    'updated_at:date',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>

</div>
