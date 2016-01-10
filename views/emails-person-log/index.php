<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmailsPersonLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Emails Person Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emails-person-log-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Emails Person Log', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'log_id',
            'email_person_id:email',
            'user_id',
            'datetime',
            'name',
            // 'email:email',
            // 'person_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
