<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EmailsOrganization */

$this->title = 'Update Emails Organization: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Emails Organizations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->email_organization_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="emails-organization-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
