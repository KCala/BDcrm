<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PhonesPersonLogSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phones-person-log-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'log_id') ?>

    <?= $form->field($model, 'phone_person_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'datetime') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'number') ?>

    <?php // echo $form->field($model, 'person_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
