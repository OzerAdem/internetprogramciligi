<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\models\Kayit */

$this->title = 'Update Kayit: ' . $model->kayitid;
$this->params['breadcrumbs'][] = ['label' => 'Kayits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kayitid, 'url' => ['view', 'id' => $model->kayitid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kayit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
