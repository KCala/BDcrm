<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PersonsLog */

$this->title = 'Update Persons Log: ' . ' ' . $model->log_id;
$this->params['breadcrumbs'][] = ['label' => 'Persons Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->log_id, 'url' => ['view', 'id' => $model->log_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="persons-log-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
