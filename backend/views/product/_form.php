<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\entities\Category;
$category = new Category();

/* @var $this yii\web\View */
/* @var $model common\entities\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->dropDownList($category->getCategories($category::PRODUCT)) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
