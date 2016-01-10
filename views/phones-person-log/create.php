<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PhonesPersonLog */

$this->title = 'Create Phones Person Log';
$this->params['breadcrumbs'][] = ['label' => 'Phones Person Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phones-person-log-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
