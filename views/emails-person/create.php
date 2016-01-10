<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EmailsPerson */

$this->title = 'Create Emails Person';
$this->params['breadcrumbs'][] = ['label' => 'Emails People', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emails-person-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
