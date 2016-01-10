<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CyclicalProjects */

$this->title = 'Update Cyclical Projects: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Cyclical Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->cyclical_project_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cyclical-projects-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
