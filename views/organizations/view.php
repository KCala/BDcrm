<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Organizations */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Organizations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organizations-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->organization_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->organization_id], [
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
            'organization_id',
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
