<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EmailsPersonLog */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Emails Person Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emails-person-log-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->log_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->log_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'log_id',
            'email_person_id:email',
            'user_id',
            'datetime',
            'name',
            'email:email',
            'person_id',
        ],
    ]) ?>

</div>
