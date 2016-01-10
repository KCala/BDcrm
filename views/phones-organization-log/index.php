<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PhonesOrganizationLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phones Organization Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phones-organization-log-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Phones Organization Log', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'log_id',
            'phone_organization_id',
            'user_id',
            'datetime',
            'name',
            // 'number',
            // 'person_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
