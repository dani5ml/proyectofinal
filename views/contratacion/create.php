<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contratacion */

$this->title = 'Create Contratacion';
$this->params['breadcrumbs'][] = ['label' => 'Contratacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contratacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
