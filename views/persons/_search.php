<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PersonsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="persons-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'person_id') ?>

    <?= $form->field($model, 'firstname') ?>

    <?= $form->field($model, 'lastname') ?>

    <?= $form->field($model, 'organization_id') ?>

    <?= $form->field($model, 'photo_filepath') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'state') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
