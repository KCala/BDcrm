<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrganizationsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="organizations-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'organization_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'city') ?>

    <?= $form->field($model, 'postal_code') ?>

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
