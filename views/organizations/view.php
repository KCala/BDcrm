<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Organizations */
/* @var $searchModel app\models\PersonsSearch */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Organizations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$personsDataProvider = new \yii\data\ActiveDataProvider([
    'query' => \app\models\Persons::find()->
    where(['organization_id'=>Yii::$app->getRequest()->getQueryParam('id')]),
    'pagination' => ['pageSize' => 20]
])


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


    <h2>Persons in this organization</h2>
    <?= GridView::widget([
        'dataProvider' => $personsDataProvider,
        'columns' => [
            'person_id',
            'firstname',
            'lastname',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
