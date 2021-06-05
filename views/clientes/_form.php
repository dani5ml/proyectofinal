<?php

use app\models\Servicio;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Clientes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clientes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_empresa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CIF')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'correo_electronico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_telf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_servicio')->textInput()->dropDownList(
                    ArrayHelper::map(Servicio::find()->all(),'id_servicio','servicio'),
                        ['prompt' => 'Selecciona un servicio'])->label('Nombre Del Servicio') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
