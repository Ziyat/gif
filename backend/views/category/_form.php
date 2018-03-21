<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\entities\Category */
/* @var $type common\entities\Category */
/* @var $form yii\widgets\ActiveForm */
?>


                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'desc')->textarea(['maxlength' => true]) ?>

                <?= $form->field($model, 'parent_id')
                    ->dropDownList($model->getCategories($type),
                        [
                                'prompt' => 'Выберите родительскую категорию'
                        ]) ?>

                <?= $form->field($model, 'type')->hiddenInput(['value' => $type])->label('') ?>

                <div class="form-group">
                    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-flat btn-block btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>


