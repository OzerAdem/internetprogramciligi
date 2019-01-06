<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel vendor\kouosl\models\KayitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kayit';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kayit-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Kayit Oluştur', ['create'], ['class' => 'btn btn-primary']) ?>
        <a class="btn btn-primary" href="." role="button">Menüye Dön</a>
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
