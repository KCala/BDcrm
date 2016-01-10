<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PhonesPerson */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Phones People', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phones-person-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->phone_person_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->phone_person_id], [
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
            'phone_person_id',
            'name',
            'number',
            'person_id',
        ],
    ]) ?>

</div>
