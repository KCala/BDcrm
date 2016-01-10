<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OrganizationsLog */

$this->title = 'Create Organizations Log';
$this->params['breadcrumbs'][] = ['label' => 'Organizations Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organizations-log-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
