<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contratacion */

$this->title = 'Update Contratacion: ' . $model->id_contrado;
$this->params['breadcrumbs'][] = ['label' => 'Contratacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_contrado, 'url' => ['view', 'id' => $model->id_contrado]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contratacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
