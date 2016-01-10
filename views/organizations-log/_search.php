<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrganizationsLogSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="organizations-log-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'log_id') ?>

    <?= $form->field($model, 'organization_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'datetime') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'postal_code') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'logo_filepath') ?>

    <?php // echo $form->field($model, 'state') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
