<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contratacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contratacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_cliente')->textInput() ?>

    <?= $form->field($model, 'nombre_empresa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_servicio')->textInput() ?>

    <?= $form->field($model, 'servicio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_proyecto')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
