<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PhonesPersonLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phones Person Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phones-person-log-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Phones Person Log', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'log_id',
            'phone_person_id',
            'user_id',
            'datetime',
            'name',
            // 'number',
            // 'person_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
