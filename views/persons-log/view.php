<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PersonsLog */

$this->title = $model->log_id;
$this->params['breadcrumbs'][] = ['label' => 'Persons Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persons-log-view">

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
            'person_id',
            'user_id',
            'datetime',
            'firstname',
            'lastname',
            'photo_filepath',
            'created',
            'state',
        ],
    ]) ?>

</div>
