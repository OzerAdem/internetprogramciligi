<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\models\Gruplar */

$this->title = 'Grubu Guncelle: ' . $model->grupid;
$this->params['breadcrumbs'][] = ['label' => 'Gruplars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->grupid, 'url' => ['view', 'id' => $model->grupid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gruplar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
