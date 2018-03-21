<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['active'] = 'contact';
?>


<div class="wrapper row3">
    <main class="hoc container clear">
        <div class="content">
            <div class="group btmspace-50 demo">
                <div class="one_quarter first">
                    <h3><?= Html::encode($this->title) ?></h3>
                    <p>
                        Телефон:<br>
                        <a href="tel:89663086371">8 966 308 63 71</a><br>
                        <a href="tel:87772388339">8 777 238 83 39</a><br>
                        Email:<br>
                        <a href="mailto:example@mail.ru">example@mail.ru</a>

                    </p>
                </div>
                <div class="three_quarter">
                    <div id="comments">
                        <h3>Свяжитесь с нами</h3>
                        <?php $form = ActiveForm::begin(); ?>
                        <div class="one_third first">
                            <?= $form->field($model, 'name')->label('Ф.И.О.')->textInput(['autofocus' => true]) ?>
                        </div>
                        <div class="one_third">
                            <?= $form->field($model, 'email')->label('Эл.Почта') ?>
                        </div>
                        <div class="one_third">
                            <?= $form->field($model, 'phone')->label('Телефон') ?>
                        </div>
                        <div class="block clear">
                            <?= $form->field($model, 'body')->label('Опишите проблему   ')->textarea(['rows' => 6]) ?>
                        </div>

                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="one_third">{image}</div><div class="block clear">{input}</div>',
                        ])->label('Введите код безопастности') ?>

                        <div>
                            <?= Html::submitInput('Отправить', ['name' => 'contact-button']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

