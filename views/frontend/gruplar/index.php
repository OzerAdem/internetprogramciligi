<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel vendor\kouosl\models\GruplarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gruplars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gruplar-index">

    <h1>Gruplar</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Grup Olustur', ['create'], ['class' => 'btn btn-primary']) ?>
        <a class="btn btn-primary" href="." role="button">Menüye Dön</a>
    </p>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'grupid',
            'grupadi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
