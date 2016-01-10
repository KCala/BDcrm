<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EmailsOrganizationLog */

$this->title = 'Create Emails Organization Log';
$this->params['breadcrumbs'][] = ['label' => 'Emails Organization Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emails-organization-log-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
