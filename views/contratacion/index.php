<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contratacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contratacion-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Contratacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_contrado',
            'id_cliente',
            'nombre_empresa',
            'id_servicio',
            'servicio',
            //'id_proyecto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
