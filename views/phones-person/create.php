<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PhonesPerson */

$this->title = 'Create Phones Person';
$this->params['breadcrumbs'][] = ['label' => 'Phones People', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phones-person-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
