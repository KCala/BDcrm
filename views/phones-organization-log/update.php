<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PhonesOrganizationLog */

$this->title = 'Update Phones Organization Log: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Phones Organization Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->log_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="phones-organization-log-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
