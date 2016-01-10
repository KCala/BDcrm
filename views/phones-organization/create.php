<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PhonesOrganization */

$this->title = 'Create Phones Organization';
$this->params['breadcrumbs'][] = ['label' => 'Phones Organizations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phones-organization-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
