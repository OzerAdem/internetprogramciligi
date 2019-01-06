<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\models\Kayit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kayit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'soyad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numara')->textInput(['maxlength' => true]) ?>

    <?php
      $city = kouosl\grupgruplama\models\Gruplar::find()->all(); 
      $listData=ArrayHelper::map($city,'grupid','grupadi'); 
    ?>

    <?= $form->field($model, 'grup')->dropdownList($listData, ['prompt' => 'Grup Secin']) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
