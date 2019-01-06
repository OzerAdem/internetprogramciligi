<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\models\KayitSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kayit-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kayitid') ?>

    <?= $form->field($model, 'ad') ?>

    <?= $form->field($model, 'soyad') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'numara') ?>

    <?php // echo $form->field($model, 'grup') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
