<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PhonesPerson */

$this->title = 'Update Phones Person: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Phones People', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->phone_person_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="phones-person-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
