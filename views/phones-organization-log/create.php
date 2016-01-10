<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PhonesOrganizationLog */

$this->title = 'Create Phones Organization Log';
$this->params['breadcrumbs'][] = ['label' => 'Phones Organization Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phones-organization-log-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
