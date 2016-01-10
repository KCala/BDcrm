<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrganizationsLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Organizations Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organizations-log-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Organizations Log', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'log_id',
            'organization_id',
            'user_id',
            'datetime',
            'name',
            // 'address',
            // 'city',
            // 'postal_code',
            // 'website',
            // 'description:ntext',
            // 'logo_filepath',
            // 'state',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
