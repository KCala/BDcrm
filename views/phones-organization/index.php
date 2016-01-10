<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PhonesOrganizationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phones Organizations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phones-organization-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Phones Organization', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'phone_organization_id',
            'name',
            'number',
            'organization_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
