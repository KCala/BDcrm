<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonsLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Persons Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persons-log-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Persons Log', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'log_id',
            'person_id',
            'user_id',
            'datetime',
            'firstname',
            // 'lastname',
            // 'photo_filepath',
            // 'created',
            // 'state',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
