<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ContactsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contacts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'contact_id') ?>

    <?= $form->field($model, 'datetime') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'organization_id') ?>

    <?= $form->field($model, 'person_id') ?>

    <?php // echo $form->field($model, 'topic') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'result') ?>

    <?php // echo $form->field($model, 'result_description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
