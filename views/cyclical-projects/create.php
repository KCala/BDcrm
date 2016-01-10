<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CyclicalProjects */

$this->title = 'Create Cyclical Projects';
$this->params['breadcrumbs'][] = ['label' => 'Cyclical Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cyclical-projects-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
