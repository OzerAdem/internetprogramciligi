<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\models\Gruplar */

$this->title = $model->grupid;
$this->params['breadcrumbs'][] = ['label' => 'Gruplars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="gruplar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Guncelle', ['update', 'id' => $model->grupid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Sil', ['delete', 'id' => $model->grupid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Silmek istediginize emin misiniz?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'grupid',
            'grupadi',
        ],
    ]) ?>

</div>
