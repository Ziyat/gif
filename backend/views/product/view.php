<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\entities\Category;

/* @var $this yii\web\View */
/* @var $model common\entities\Product */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading">Общие данные</div>
            <div class="panel-body">
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        'title',
                        'desc',
                        [
                            'attribute' => 'category_id',
                            'value' => function ($model) {
                                $category = (new Category())->getCategories(Category::PRODUCT);
                                return $model->category_id ? $category[$model->category_id] : '';
                        }
                        ],
                        'created_at:datetime',
                        'updated_at:datetime',
                    ],
                ]) ?>
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Атрибуты</h3>
                    </div>
                    <div class="box-body no-padding">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Ключ</th>
                                <th>Значение</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($model->attrProducts as $attribute): ?>
                                <tr>
                                    <td><?= $attribute->key ?></td>
                                    <td><?= $attribute->value ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?= Html::a('<i class="fa fa-trash"></i> Удалить', ['delete', 'id' => $model->id], [
                    'class' => 'pull-right btn btn-danger btn-flat',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
                <?= Html::a('<i class="fa fa-edit"></i> Редактировать', ['update', 'id' => $model->id], ['class' => 'pull-right btn btn-success btn-flat']) ?>

            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Галерея</h3>
            </div>
            <div class="box-body no-padding">
                <ul class="users-list clearfix">
                    <?php foreach ($model->getBehavior('galleryBehavior')->getImages() as $image): ?>
                        <li>
                            <?= Html::img($image->getUrl('small')); ?>
                            <a class="users-list-name" href="#"><?= $image->name; ?></a>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>


    </div>
</div>
