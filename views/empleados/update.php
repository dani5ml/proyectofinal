<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Empleados */

$this->title = 'Update Empleados: ' . $model->id_emple;
$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_emple, 'url' => ['view', 'id' => $model->id_emple]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="empleados-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
