<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PhonesOrganization */

$this->title = 'Update Phones Organization: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Phones Organizations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->phone_organization_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="phones-organization-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
