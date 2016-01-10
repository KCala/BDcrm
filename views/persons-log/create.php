<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PersonsLog */

$this->title = 'Create Persons Log';
$this->params['breadcrumbs'][] = ['label' => 'Persons Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persons-log-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
