<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmailsPersonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Emails People';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emails-person-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Emails Person', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'email_person_id:email',
            'name',
            'email:email',
            'person_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
