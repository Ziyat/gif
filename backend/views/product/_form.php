<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\entities\Category;

$category = new Category();

/* @var $this yii\web\View */
/* @var $model common\entities\Product */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading">Общие данные</div>
            <div class="panel-body">
                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'desc')->textarea(['maxlength' => true]) ?>

                <?= $form->field($model, 'category_id')->dropDownList($category->getCategories($category::PRODUCT)) ?>

                <div class="form-group">
                    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-block btn-success']) ?>
                </div>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
    <?php if ($model->isNewRecord): ?>
        <p>Can not upload images for new record</p>
    <?php else: ?>

        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">Атрибуты</div>
                <div class="panel-body">
                    <div class="row">
                        <?php if ($attrbutes = $model->attrProducts): ?>
                            <div class="col-lg-12">
                                <table class="table table-condensed">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ключ</th>
                                        <th>Значение</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($attrbutes as $attrbute): ?>
                                        <tr>
                                            <td><?= $attrbute->id ?></td>
                                            <td><?= $attrbute->key ?></td>
                                            <td><?= $attrbute->value ?></td>
                                            <td><?= Html::button('<i class="fa fa-remove"></i>', ['attribute_id' => $attrbute->id, 'class' => 'btn btn-link remvoeAttr']) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif; ?>
                        <div class="col-lg-5">
                            <div class="input-group">
                                <span class="input-group-addon">Ключ</span>
                                <input id="key" type="text" class="form-control" placeholder="Цена"
                                       aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="input-group">
                                <span class="input-group-addon">Значение</span>
                                <input id="value" type="text" class="form-control" placeholder="1500"
                                       aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <?= Html::button('<i class="fa fa-plus"></i>', ['id' => 'addAttr', 'class' => 'btn btn-link']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

</div>

<?php
if (!$model->isNewRecord) {
    $id = $model->id;
    $script = <<< JS
    var key = $('#key'),
        value = $('#value'),
        id = $id, 
        csrfToken = $('meta[name="csrf-token"]').attr('content');
    $('#addAttr').on('click',function(){
        $.ajax({
              method: "POST",
              url: "/admin/attr-product/create",
              data: { '_csrf-backend': csrfToken, AttrProduct:{key: key.val(), value: value.val(), product_id: id}  }
            })
            .done(function( res ) {
                var html = "<tr><td>"
                            +res.id+"</td><td>"
                            +res.key+"</td><td>"
                            +res.value+"</td>"
                            +"</tr>";
                $('tbody').append(html);
            });
    });
    
    $('.remvoeAttr').on('click',function(){
       var parent = $(this).parent().parent();
       var attribute_id = $(this).attr('attribute_id');
         $.ajax({
               method: "POST",
               url: "/admin/attr-product/delete?id="+attribute_id,
             })
             .done(function( msg ) {
                 if(msg){
                    parent.remove();
                 }else{
                     alert('Что то пошло не так!');
                 }
             });
     });
JS;

    $this->registerJs($script);
}
?>

