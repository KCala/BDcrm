<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PhonesOrganizationLog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phones-organization-log-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'phone_organization_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'datetime')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'person_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
