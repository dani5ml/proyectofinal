<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Clientes */

$this->title = $model->id_cliente;
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="clientes-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php if (Yii::$app->user->isGuest) { ?>

    <?php } else { ?>
        <p>
            <?= Html::a('Update', ['update', 'id' => $model->id_cliente], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id_cliente], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>
    <?php } ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_cliente',
            'nombre_empresa',
            'CIF',
            'correo_electronico',
            'num_telf',
            'id_servicio',
        ],
    ]) ?>

</div>