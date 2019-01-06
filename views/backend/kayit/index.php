<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel vendor\kouosl\models\KayitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kayits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kayit-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kayit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kayitid',
            'ad',
            'soyad',
            'email:email',
            'numara',
            //'grup',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
