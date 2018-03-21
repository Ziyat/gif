<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use yii\helpers\Url;
use common\entities\Category;
use common\entities\Page;
use kartik\date\DatePicker;

$category = new Category();
if(!$model->isNewRecord)
$model->published_at = Yii::$app->formatter->asDate($model->published_at,'dd-MM-yyyy');

/* @var $this yii\web\View */
/* @var $model common\entities\Article */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
    <?php $form = ActiveForm::begin(); ?>
    <div class="col-lg-8">
        <div class="box box-default">
            <div class="box-body">
                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'desc')->textarea() ?>
                <?= $form->field($model, 'text')->widget(Widget::className(), [
                    'settings' => [
                        'lang' => 'ru',
                        'minHeight' => 200,
                        'imageUpload' => Url::to(['/article/image-upload']),
                        'plugins' => [
                            'clips',
                            'fullscreen',
                            'table',
                            'video',
                        ]
                    ]
                ]) ?>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="box box-default">
            <div class="box-body">
                <?= $form->field($model, 'status')->dropDownList(Page::getStatusArray()) ?>
                <?= $form->field($model, 'category_id')->dropDownList($category->getCategories($category::ARTICLE)) ?>
                <?= $form->field($model, 'published_at')
                    ->widget(DatePicker::className(), [
                        'pluginOptions' => [
                            'format' => 'dd-mm-yyyy',
                            'todayHighlight' => true
                        ]
                    ]); ?>

                <div class="form-group">
                    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-block btn-flat btn-success']) ?>
                </div>
            </div>
        </div>
    </div>


    <?php ActiveForm::end(); ?>

</div>