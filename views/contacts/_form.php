<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contacts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contacts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'datetime')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'organization_id')->textInput() ?>

    <?= $form->field($model, 'person_id')->textInput() ?>

    <?= $form->field($model, 'topic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'result')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'result_description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
