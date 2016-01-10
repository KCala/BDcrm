<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\OrganizationsLog */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Organizations Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organizations-log-view">

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
            'organization_id',
            'user_id',
            'datetime',
            'name',
            'address',
            'city',
            'postal_code',
            'website',
            'description:ntext',
            'logo_filepath',
            'state',
        ],
    ]) ?>

</div>
