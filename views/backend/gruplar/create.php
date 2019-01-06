<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\models\Gruplar */

$this->title = 'Create Gruplar';
$this->params['breadcrumbs'][] = ['label' => 'Gruplars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gruplar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
