<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EmailsOrganization */

$this->title = 'Create Emails Organization';
$this->params['breadcrumbs'][] = ['label' => 'Emails Organizations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emails-organization-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
